#Buliding the custom PHP image

By using the build arguments, we can use a single dockerfile to build all our php w/ mysql images
Run any of the following from within this directory

When building your own images, you want to use your docker hub id and then the name of the images. For these examples,
you are seeing my docker handle. Feel free to use your own, just make sure you do so consistently.

```
docker image build -f Dockerfile-php-mysql -t dhluther/php:7.4-apache-mysql . --build-arg PHP_TARGET=7.4-apache

```
```
docker image build -f Dockerfile-php-mysql -t dhluther/php:7.3-apache-mysql . --build-arg PHP_TARGET=7.3-apache

```
```
docker image build -f Dockerfile-php-mysql -t dhluther/php:7.4-fpm-mysql . --build-arg PHP_TARGET=7.4-fpm

```
```
docker image build -f Dockerfile-php-mysql -t dhluther/php:7.3-fpm-mysql . --build-arg PHP_TARGET=7.3-fpm

```