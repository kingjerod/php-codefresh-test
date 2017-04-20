FROM lagun4ik/php7-fpm:dev

RUN mkdir -p /app/portal
WORKDIR /app/portal
COPY . /app/portal
ENV PATH=$PATH:/root/.composer/vendor/bin
RUN composer install --no-progress --optimize-autoloader --no-interaction --quiet
