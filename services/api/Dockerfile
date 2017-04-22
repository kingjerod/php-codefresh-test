FROM lagun4ik/php7-fpm:dev

COPY . /app/api
WORKDIR /app/api
ENV PATH=$PATH:/root/.composer/vendor/bin
RUN composer install --optimize-autoloader --no-interaction
VOLUME ["/app/api"]
