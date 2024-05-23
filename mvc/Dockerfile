FROM php:8.3.7-apache
WORKDIR /var/www/html/
RUN apt-get update && apt-get install -y \
	libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
	libzip-dev \
     && docker-php-ext-install -j$(nproc) gd \
	pdo \
	pdo_mysql \
	mysqli \
	bcmath \
	zip 
# RUN apt-get update && apt-get install -y \
#   zlib1g-dev \
#   libzip-dev \
#   libpng-dev \
#   nodejs npm
# RUN npm install bootstrap
COPY . .
RUN chown -R www-data:www-data ./
ENV APACHE_DOCUMENT_ROOT /var/www/html/
# WORKDIR /var/www/html/public
# RUN npm install
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN a2enmod rewrite
EXPOSE 80
