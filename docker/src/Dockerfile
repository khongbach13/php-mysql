FROM php:7.4-apache

# Cài đặt extension mysqli
RUN docker-php-ext-install mysqli

COPY . /var/www/html

WORKDIR /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
