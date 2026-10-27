FROM php:8.3-apache

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    sqlite3 \
    libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite

RUN chown -R www-data:www-data /var/www/html