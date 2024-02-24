FROM php:8.1.0-apache
WORKDIR /var/www/html

RUN a2enmod rewrite

RUN apt-get update -y \
    && apt-get install -y \
        libicu-dev \
        unzip \
        zip \
        zlib1g-dev \
        libmariadb-dev \
		libfreetype-dev \
		libjpeg62-turbo-dev \
    && apt-get clean

RUN pecl install redis-5.3.7 \
	&& pecl install xdebug-3.2.1 \
	&& docker-php-ext-enable redis xdebug

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN docker-php-ext-install gettext intl pdo_mysql gd

RUN docker-php-ext-configure gd --enable-gd --with-freetype \
    && docker-php-ext-install -j$(nproc) gd