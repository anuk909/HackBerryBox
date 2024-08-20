# Use a PHP 8.1 Apache base image
FROM php:8.1-apache

# Set the working directory
WORKDIR /var/www/html

# Copy the application files into the container
COPY app/ /var/www/html/

# Install the mysqli PHP extension and libxml
RUN docker-php-ext-install mysqli \
    && apt-get update && apt-get install -y libxml2-dev \
    && docker-php-ext-install xml

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
