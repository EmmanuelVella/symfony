FROM php:7.1-cli-alpine

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR "/var/www/html"

CMD ["php", "-S", "0.0.0.0:8000", "-t", "/var/www/html/web"]
