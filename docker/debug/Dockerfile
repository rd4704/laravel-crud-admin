FROM php:7.1.2-alpine

RUN mkdir -p /usr/local/bin/ && \
    curl -s -o installer.php "https://getcomposer.org/installer" && \
    php installer.php --install-dir=/usr/local/bin --filename=composer && \
    rm -f installer.php
