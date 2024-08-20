# Use a PHP 8.1 Apache base image
FROM php:8.1-apache

# Set the working directory
WORKDIR /var/www/html

# Copy the application files into the container
COPY berryhome/ /var/www/html/

# Install the mysqli PHP extension
RUN docker-php-ext-install mysqli

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
