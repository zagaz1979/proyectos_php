FROM php:8.2-apache

# Instala las extensiones PHP necesarias
RUN apt-get update \
    && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev libwebp-dev libxpm-dev \
       libzip-dev libicu-dev libxml2-dev libxslt-dev \
       libssl-dev zlib1g-dev libmemcached-dev \
       libmcrypt-dev libonig-dev \
       firebird-dev libfbclient2 \
    && docker-php-ext-install -j$(nproc) \
       bcmath \
       gd \
       intl \
       mbstring \
       mysqli \
       opcache \
       pdo \
       pdo_firebird \
       pdo_mysql \
       soap \
       sockets \
       xsl \
       zip \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

# Copia la configuración de Apache para el sitio
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Habilita los módulos de Apache necesarios
RUN a2enmod rewrite

# Reinicia el servicio de Apache
RUN service apache2 restart

# Copia los archivos de la aplicación a la carpeta del sitio
COPY . /var/www/html

EXPOSE 80
