FROM php:7.3-apache
RUN a2enmod rewrite

RUN apt update
RUN apt install git -y

RUN docker-php-ext-install pdo pdo_mysql

COPY ./app /var/www/html/

RUN composer install --no-dev --no-interaction -o
