#!/bin/bash
set -e

# Update Apache port dynamically from PORT env var (Vercel sets this)
PORT=${PORT:-80}
sed -i "s/Listen 80/Listen $PORT/" /etc/apache2/ports.conf
sed -i "s/\${PORT:-80}/$PORT/g" /etc/apache2/sites-available/000-default.conf

# Clear and cache Laravel config for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start Apache in foreground
apache2-foreground
