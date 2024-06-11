FROM php:8.3-apache
RUN apt-get update && \
    docker-php-ext-install mysqli pdo pdo_mysql
RUN apt-get -y install nano
RUN a2enmod rewrite
ENV APACHE_DOCUMENT_ROOT=/var/www/html/
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
# RUN composer require --dev phpunit/phpunit ^11.0 ne fonctionne pas car mode interactif refusé