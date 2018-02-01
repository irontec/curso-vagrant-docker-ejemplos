FROM php:7.0-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli \
    && a2enmod rewrite

VOLUME /var/www/html/
