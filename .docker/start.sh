#!/bin/bash
set -e

# Update Apache port dynamically from PORT env var (Vercel sets this).
# Dockerfile.vercel already rewrote ports.conf to "Listen ${PORT:-80}" at
# build time, so looking for the literal "Listen 80" here matched nothing and
# Apache was handed an unresolved shell expression, which it read as an empty
# port: AH00526, "Port must be specified". Both spellings are substituted so
# this works whether or not that build step has run.
PORT=${PORT:-80}
sed -i -e "s/Listen \${PORT:-80}/Listen $PORT/" -e "s/^Listen 80$/Listen $PORT/" /etc/apache2/ports.conf
sed -i "s/\${PORT:-80}/$PORT/g" /etc/apache2/sites-available/000-default.conf

# Apache reads no value as no port at all, so fail here with the reason rather
# than letting apache2-foreground exit with a bare code 1.
if ! grep -qE "^[[:space:]]*Listen[[:space:]]+[0-9]+" /etc/apache2/ports.conf; then
    echo "start.sh: no valid Listen directive in /etc/apache2/ports.conf" >&2
    grep -n 'Listen' /etc/apache2/ports.conf >&2 || true
    exit 1
fi

# Clear and cache Laravel config for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start Apache in foreground
apache2-foreground
