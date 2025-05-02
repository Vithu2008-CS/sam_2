# Step 1: Use official PHP-Apache base image
FROM php:8.1-apache

# Step 2: Copy current directory (app code) into Apache's web root
COPY . /var/www/html

# Step 3: Expose port 80 to be accessible outside the container
EXPOSE 80
