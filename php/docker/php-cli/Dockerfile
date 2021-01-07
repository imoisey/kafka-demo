FROM php:7.4-cli-alpine

RUN apk update && apk add autoconf g++ make git unzip

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_MEMORY_LIMIT -1

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/bin --filename=composer --version=1.10.19 --quiet \
    && rm -rf /root/.composer/cache


