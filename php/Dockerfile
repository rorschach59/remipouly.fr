FROM php:8.3-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN apt-get update
RUN apt-get install sendmail -y
RUN apt-get install nano -y
RUN apt-get install git -y
RUN apt-get install zip -y
RUN apt-get install unzip -y
RUN apt-get install npm -y

RUN apt-get install nano default-mysql-client git-all libzip-dev zlib1g-dev libpng-dev libonig-dev libicu-dev -y

RUN docker-php-ext-install gd
RUN docker-php-ext-install zip

RUN a2enmod rewrite

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer