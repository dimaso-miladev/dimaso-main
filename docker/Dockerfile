FROM php:8.0-fpm

RUN apt update && apt install -y \
    zip unzip curl wget git nano libpng-dev libjpeg-dev libfreetype6-dev \
    libonig-dev libzip-dev libxml2-dev libpq-dev libpng-dev libjpeg-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mbstring pdo pdo_mysql pdo_pgsql zip xml

RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash - && \
    apt-get install -y nodejs


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html


EXPOSE 9000

CMD ["php-fpm"]
