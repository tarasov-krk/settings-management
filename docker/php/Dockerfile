FROM php:8.1-fpm

RUN apt-get update -qq && apt-get install -y git \
    curl \
    perl \
    zip \
    postgresql \
    libpq-dev

RUN docker-php-ext-install \
    pdo \
    pdo_pgsql \
    pgsql

RUN php -r "readfile('https://getcomposer.org/installer');" | php -- --install-dir=/usr/local/bin --filename=composer
