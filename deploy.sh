#!/bin/bash
git pull && \
git pull && \
chown -R nginx:nginx ./ && \
chmod +x ./deploy.sh && \
php artisan config:cache
php artisan route:cache
php artisan api:cache
php artisan view:clear