FROM php:8.2-cli

# Install and enable the pcntl extension
RUN docker-php-ext-install pcntl

WORKDIR /usr/src/myapp
COPY app.php .

CMD ["php", "-f", "app.php"]
