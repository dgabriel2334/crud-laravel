FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY .htaccss.example /var/www/html/.htaccss

RUN a2enmod rewrite

WORKDIR /var/www/html

COPY . /var/www/html

COPY .env.example /var/www/html/.env
RUN composer clear-cache
RUN composer self-update
RUN composer install --no-interaction

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

COPY install/docker/php/8.2/apache.conf /etc/apache2/sites-available/000-default.conf

RUN mkdir public/img/upload

RUN chmod 777 -R /var/www/html

# RUN php artisan migrate

EXPOSE 80

CMD ["apache2-foreground"]
