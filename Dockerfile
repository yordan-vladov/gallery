# Dockerfile
FROM php:8.1-apache

# Install PHP extensions
RUN docker-php-ext-install mysqli

# Copy project files to the Apache root directory
COPY . /var/www/html/

# Enable Apache mod_rewrite
RUN a2enmod rewrite
