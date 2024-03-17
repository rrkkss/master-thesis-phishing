FROM php:8.2-fpm

ARG user
ARG uid

RUN apt-get update && apt-get install -y --no-install-recommends \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        zip \
        git \
        curl \
        unzip \
        whois \
        netbase \
        certbot \
    && apt-get clean

RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN groupadd -g 1000 "$user"
RUN useradd -u 1000 -ms /bin/bash -g "$user" "$user"

COPY . /var/www
COPY --chown="$user":"$user" . /var/www

WORKDIR /var/www

RUN chown -R $USER:www-data storage
RUN chmod -R 775 storage

USER "$user"

CMD ["php-fpm"]
EXPOSE 9000