FROM php:7.3-apache
RUN a2enmod rewrite

RUN apt-get update
RUN apt-get install git -y
RUN apt-get install curl
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www/html/
COPY . .