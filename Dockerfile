FROM php:8.0-cli

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    git \
    curl \
    zip \
    && docker-php-ext-install pdo pdo_mysql mbstring zip

# Install additional extensions that may be needed
RUN apt-get install -y libcurl4-openssl-dev \
    && docker-php-ext-install curl

# Increase memory limit for Composer
RUN echo "memory_limit=-1" > /usr/local/etc/php/conf.d/memory-limit.ini

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /app

# Copy composer files
COPY composer.json composer.lock* /app/

# Install PHP dependencies with verbose output
RUN composer install --no-interaction --prefer-dist --optimize-autoloader --verbose

# Copy the rest of the application
COPY . /app/

# Expose port 80 and run the PHP built-in server
# Changed to root directory since there's no "public" folder
EXPOSE 80
CMD ["php", "-S", "0.0.0.0:80"]
