FROM php:8.1-fpm

ARG user
ARG uid

RUN apt-get update && apt-get install -y \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        zip \
        git \
        curl \
        unzip \
    && apt-get clean

RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN useradd -G www-data,root -u "$uid" -d /home/"$user" "$user"
# RUN mkdir -p /home/"$user"/.composer && \
#     chown -R "$user":"$user" /home/"$user"

WORKDIR /var/www

COPY . .
RUN chown -R "$user":"$user" /var/www/storage
RUN composer install

CMD ["php-fpm"]

USER $user

EXPOSE 9000