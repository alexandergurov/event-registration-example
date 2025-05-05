#syntax=docker/dockerfile:1.4
ARG BASE_IMAGE="gitlab.nda.url:4567/nda/devops/base-images/php/ms:v1"

# Prod image
FROM $BASE_IMAGE AS app_php

RUN mkdir -p /var/run/php

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
COPY . .
RUN rm -Rf docker/

RUN set -eux; \
	mkdir -p var/cache var/log; \
	composer dump-autoload --classmap-authoritative --no-dev; \
	composer dump-env prod; \
	composer run-script --no-dev post-install-cmd; \
	chmod +x bin/console; sync

ENTRYPOINT ["docker-entrypoint"]
CMD ["php-fpm"]

# Nginx image
FROM nginx:1.25.1-alpine AS app_nginx

WORKDIR /srv/app

COPY --from=app_php /srv/app/public public/
