# Infra php Dockerfile
# Project: PMFCParty Portal
# Maintaner: David H Tekwie <yamis.spiriteagle@gmail.com>
# Date: September 2021
FROM php:8.0-fpm-buster

# Updated maintainer label for PMFCParty Project
LABEL maintainer="Spirit Eagle <yamis.spiriteagle@gmail.com>"

# Initialize terminal
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

# Remove Composer v2.0 that's shipped with php:8.0-fpm-buster
# RUN rm /usr/bin/composer

# Install latest stable version of Composer v2.1.8
# Note: Keep this code to update the Composer version to the next LTS in the future.
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php --filename=composer --version=2.1.8
RUN php -r "unlink('composer-setup.php');"
RUN mv composer /usr/bin/composer

# timezone environment
ENV TZ=UTC \
  # locale
  LANG=en_US.UTF-8 \
  LANGUAGE=en_US:en \
  LC_ALL=en_US.UTF-8 \
  # composer environment
  COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer

# Copy composer
COPY --from=composer:2.1.8 /usr/bin/composer /usr/bin/composer

# Install Deps
RUN apt-get update && \
  apt-get -y install git libicu-dev libonig-dev libzip-dev unzip locales && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* && \
  locale-gen en_US.UTF-8 && \
  localedef -f UTF-8 -i en_US en_US.UTF-8 && \
  mkdir /var/run/php-fpm && \
  docker-php-ext-install intl pdo_mysql zip bcmath && \
  composer config -g process-timeout 3600 && \
  composer config -g repos.packagist composer https://packagist.org

# Copy assets
COPY ./infra/docker/php/php-fpm.d/zzz-www.conf /usr/local/etc/php-fpm.d/zzz-www.conf
COPY ./infra/docker/php/php.ini /usr/local/etc/php/php.ini

# Set Working Dir
WORKDIR /work/backend
