FROM php:7.4.3-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN ["apt-get", "update"]
RUN ["apt-get", "-y", "install", "nano"]

