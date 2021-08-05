FROM php:7.4-fpm

#Get Composer
FROM composer:2.0 as vendor

WORKDIR /app


COPY composer.json composer.json
COPY composer.lock composer.lock

RUN composer install \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --no-dev \
    --prefer-dist

COPY . .
RUN composer dump-autoload

# Copy Composer dependencies
COPY --from=vendor app/vendor/ ./vendor/
COPY . .


# Run Laravel commands
RUN php artisan optimize:clear

CMD php artisan serve --host=0.0.0.0 --port=8080

EXPOSE 8080