# Infra MYSQL Dockerfile
# Project: PMFCParty Portal
# Maintaner: David H Tekwie <yamis.spiriteagle@gmail.com>
# Date: September 2021
FROM mysql/mysql-server:8.0

# Updated maintainer label for PMFCParty Project
LABEL maintainer="Spirit Eagle <yamis.spiriteagle@gmail.com>"

# Set DB TZ
ENV TZ=UTC

# Copy mysql conf to container
COPY ./infra/docker/mysql/my.cnf /etc/my.cnf
