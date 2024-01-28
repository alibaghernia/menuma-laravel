#! /bin/bash

git pull;
docker-compose up -d --build;
docker-compose exec menuma-laravel-back-stage php artisan migrate;
