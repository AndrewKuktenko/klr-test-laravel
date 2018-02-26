#!/bin/sh

cd /var/www/Lynx-Development-Website && git pull && composer install && npm install && npm run prod