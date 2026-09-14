# =========================
# 1. Build frontend
# =========================
FROM node:22-bookworm AS frontend

WORKDIR /app

COPY package*.json ./
RUN npm install

COPY resources ./resources
COPY public ./public
COPY vite.config.js .
COPY package.json .

RUN npm run build


# =========================
# 2. Laravel / PHP
# =========================
FROM dunglas/frankenphp:php8.2-bookworm

RUN install-php-extensions \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY composer.json composer.lock ./

RUN composer install \
    --no-dev \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader

COPY . .

# =========================
# Aiven MySQL SSL Certificate
# =========================
RUN mkdir -p /app/storage/certs

COPY storage/certs/ca.pem /app/storage/certs/ca.pem

# Copy hasil Vite build
COPY --from=frontend /app/public/build ./public/build

RUN php artisan config:clear
RUN php artisan route:clear
RUN php artisan view:clear

ENV SERVER_NAME=:8080

EXPOSE 8080

CMD ["frankenphp", "php-server", "--root", "/app/public"]