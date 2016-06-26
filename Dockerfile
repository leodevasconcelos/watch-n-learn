FROM php:7

# Set the work directory and add the project files to it
WORKDIR /opt/watch-n-learn
ADD . /opt/watch-n-learn

# Install Dependencies
RUN apt-get update && apt-get install -y \
      libpq-dev \
    && docker-php-ext-install pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN chmod +x /usr/local/bin/composer

CMD composer install

# Expose the port
EXPOSE 8000

# Run the app
CMD php artisan serve --host=0.0.0.0 --port=8000