FROM lagun4ik/php7-fpm:dev

COPY . /app/portal
WORKDIR /app/portal
ENV PATH=$PATH:/root/.composer/vendor/bin
RUN composer install --optimize-autoloader --no-interaction
