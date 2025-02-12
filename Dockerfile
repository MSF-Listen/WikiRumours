FROM php:7.2-apache
# COPY source/ /srv

run apt-get update -y && apt-get install -y libpng-dev libjpeg62-turbo-dev libgd-dev libpng-dev

ENV APACHE_DOCUMENT_ROOT /srv/web_root

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN a2enmod rewrite

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN docker-php-ext-install mysqli

RUN docker-php-ext-configure gd --with-jpeg-dir=/usr/include/ --with-gd 
RUN docker-php-ext-install gd
