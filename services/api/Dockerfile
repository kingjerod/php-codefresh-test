FROM lagun4ik/php7-fpm:dev

RUN mkdir -p /app/api
WORKDIR /app/api
COPY . /app/api
ENV PATH=$PATH:/root/.composer/vendor/bin
RUN composer install --no-progress --optimize-autoloader --no-interaction

