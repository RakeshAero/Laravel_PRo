# Use an official PHP image as the base
FROM php:8.2-fpm-alpine

# Install necessary packages
RUN apk add --no-cache \
    libzip-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    openssl-dev \
    zlib-dev \
    && docker-php-ext-install pdo pdo_mysql zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && apk add --no-cache libzip

# Set working directory
WORKDIR /app

# Copy composer.json and composer.lock
COPY composer.json composer.lock ./

# Install project dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Copy the rest of the project files
COPY . .

# Set environment variables from .env file
ENV APP_ENV development
# Replace with your actual environment variables
ENV DB_HOST db
ENV DB_PORT 3306
ENV DB_DATABASE 'laravel'
ENV DB_USERNAME 'root'
ENV DB_PASSWORD ''

# Expose the PHP-FPM port
EXPOSE 9000

# Define the command to run the PHP-FPM server
CMD ["php-fpm"]
