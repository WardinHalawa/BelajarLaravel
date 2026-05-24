FROM richarvey/nginx-php-fpm:latest

# Salin semua source code Laravel ke dalam server
COPY . /var/www/html

# Atur konfigurasi agar web mengarah ke folder public Laravel
ENV WEBROOT /var/www/html/public
ENV APP_ENV production

# Jalankan composer untuk install library Laravel
RUN composer install --no-dev --optimize-autoloader

# Berikan izin akses folder storage demi keamanan Laravel
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache