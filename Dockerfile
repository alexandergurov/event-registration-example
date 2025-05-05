#syntax=docker/dockerfile:1.4
ARG BASE_IMAGE="gitlab.nda.url:4567/nda/devops/base-images/php/ms:v1"

# Prod image
FROM $BASE_IMAGE AS app_php

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY --link docker/php/conf.d/app.ini $PHP_INI_DIR/conf.d/
COPY --link docker/php/conf.d/app.prod.ini $PHP_INI_DIR/conf.d/
COPY --link docker/php/php-fpm.d/zz-docker.conf /usr/local/etc/php-fpm.d/zz-docker.conf

RUN mkdir -p /var/run/php

COPY --link docker/php/docker-healthcheck.sh /usr/local/bin/docker-healthcheck
RUN chmod +x /usr/local/bin/docker-healthcheck

RUN set -xe \
    && apk add --no-cache --update --virtual .phpize-deps $PHPIZE_DEPS \
    librdkafka-dev \
    && pecl install rdkafka
COPY docker/php/kafka.ini $PHP_INI_DIR/conf.d/

COPY --link docker/php/docker-entrypoint.sh /usr/local/bin/docker-entrypoint
RUN chmod +x /usr/local/bin/docker-entrypoint

# Определяем переменную окружнения авторизации в gitlab
ARG COMPOSER_AUTH_GITLAB_TOKEN
ARG COMPOSER_AUTH="{\"gitlab-token\":{\"gitlab.nda.url\":\"${COMPOSER_AUTH_GITLAB_TOKEN}\"}}"
ENV COMPOSER_AUTH=${COMPOSER_AUTH}

# prevent the reinstallation of vendors at every changes in the source code
COPY composer.* symfony.* ./
RUN set -eux; \
	composer install --prefer-dist --no-dev --no-autoloader --no-scripts --no-progress; \
	composer clear-cache

# copy sources
COPY --link . .
RUN rm -Rf docker/

RUN set -eux; \
	mkdir -p var/cache var/log; \
	composer dump-autoload --classmap-authoritative --no-dev; \
	composer dump-env prod; \
	composer run-script --no-dev post-install-cmd; \
	chmod +x bin/console; sync

ENTRYPOINT ["docker-entrypoint"]
CMD ["php-fpm"]

# Dev image
FROM app_php AS app_php_dev

ENV APP_ENV=dev XDEBUG_MODE=off
VOLUME /srv/app/var/

RUN rm $PHP_INI_DIR/conf.d/app.prod.ini; \
	mv "$PHP_INI_DIR/php.ini" "$PHP_INI_DIR/php.ini-production"; \
	mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

COPY --link docker/php/conf.d/app.dev.ini $PHP_INI_DIR/conf.d/

RUN set -eux; \
	install-php-extensions xdebug

RUN rm -f .env.local.php

# Nginx image
FROM nginx:1.25.1-alpine AS app_nginx

WORKDIR /srv/app

RUN apk upgrade --update-cache --available && \
    apk add openssl && \
    rm -rf /var/cache/apk/* && \
    openssl req -x509 -newkey rsa:4096 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt -sha256 -days 3650 -nodes -subj "/C=RU/ST=Any/L=Any/O=Any/OU=Any/CN=Any" && \
    openssl dhparam -out /etc/ssl/certs/dhparam.pem 4096


COPY --from=app_php --link /srv/app/public public/
COPY --link docker/nginx/templates /etc/nginx/templates
