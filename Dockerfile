FROM php:8.1-apache

ADD ./php_crud/ /var/www/html/

WORKDIR /var/www/html

RUN docker-php-ext-install mysqli

EXPOSE 80