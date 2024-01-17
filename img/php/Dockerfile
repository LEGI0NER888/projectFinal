FROM php:8.2-fpm

MAINTAINER LEGO <alexlegion2003@gmail.com>

RUN apt-get update && apt-get install -y \
    curl \
    wget \
    git \
    libmcrypt-dev \
    libonig-dev \
    libzip-dev
RUN docker-php-ext-install -j$(nproc) iconv mbstring mysqli pdo_mysql zip
RUN apt-get update && apt-get install -y mysql-client
RUN pecl install mcrypt-1.0.6 && docker-php-ext-enable mcrypt

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini

WORKDIR /var/www

CMD ["php-fpm"]
