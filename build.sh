#!/usr/bin/env bash
# exit on error
set -o errexit

composer install --no-dev --optimize-autoloader

# Jalankan migrasi database kalau nanti sudah connect database
# php artisan migrate --force