FROM php:7.2-alpine

RUN mkdir /var/www

WORKDIR /var/www

COPY composer.json composer.lock ./

RUN wget http://getcomposer.org/composer.phar -O composer.phar && \
    php composer.phar install && \
    rm composer.phar

COPY . ./

USER nobody

CMD ["php", "src/app.php"]
