# Use the base php:8-apache image
FROM php:8-apache

# Install necessary PHP extensions (pdo_mysql)
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache mod_rewrite (optional, if needed)
RUN a2enmod rewrite

# Copy the current directory's contents to /var/www/html
COPY . /var/www/html