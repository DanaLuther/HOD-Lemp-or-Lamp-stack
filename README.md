# Hands on Docker - Creating your own LAMP or LEMP stack

## Install Docker Desktop
https://www.docker.com/products/docker-desktop

## Images you will need for this workshop:
* php:7.4-fpm
* php:7.3-fpm
* php:7.4-apache
* php:7.3-apache
* nginx:latest
* mysql:latest
* redis:latest
* composer:latest
* phpmyadmin/phpmyadmin:latest
* selenium/standalone-chrome-debug
* selenium/standalone-firefox-debug:2.53.0

To download the images, use the docker image pull command
```
docker image pull php:7.4-fpm
```
If local disk space is a concern, you can skip the alternate php version and only download either the chrome or the
 firefox selenium image, not both.

