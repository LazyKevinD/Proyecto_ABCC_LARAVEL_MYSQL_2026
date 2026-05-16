FROM php:8.2-cli

WORKDIR /app

RUN apt-get update && apt-get install -y \
    unzip \
    git \
    libsqlite3-dev

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN touch database/database.sqlite

ENV APP_ENV=production
ENV APP_DEBUG=false

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000