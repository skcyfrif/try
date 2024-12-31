FROM php:8.0-apache

# Set the working directory
WORKDIR /var/www/html

# Copy the current directory content into the container
COPY . .

# Install PDO MySQL extension
RUN docker-php-ext-install pdo_mysql

# Enable Apache mod_rewrite (if needed for your app)
RUN a2enmod rewrite

# Expose Apache port (80)
EXPOSE 80

# Apache is the default process in php:8.0-apache, so we don't need CMD for the PHP built-in server
CMD ["apache2-foreground"]
