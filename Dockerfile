FROM php:8.0-cli

# Install necessary dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    git \
    curl

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /app

# Copy composer.json and composer.lock
COPY composer.json composer.lock /app/

# Run composer install
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Copy the rest of the application code
COPY . /app/

# Expose port and start PHP server
EXPOSE 80
CMD ["php", "-S", "0.0.0.0:80", "-t", "public"]
