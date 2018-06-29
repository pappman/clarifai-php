FROM php:7.0

RUN  apt-get update \
    && apt-get install -y --no-install-recommends wget git zlib1g-dev \
    && rm -rf /var/lib/apt/lists/*

RUN wget https://phar.phpunit.de/phpunit-5.7.phar \
    && chmod +x phpunit-5.7.phar \
    && mv phpunit-5.7.phar /usr/local/bin/phpunit

RUN curl --silent --show-error https://getcomposer.org/installer | \
    php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install bcmath zip

# Copy the composer.json file and do `composer install` before copying all the other files, to avoid
# reinstall on every code change.
COPY ./composer.json /usr/src/clarifai/composer.json
RUN cd /usr/src/clarifai/ \
    && composer install

COPY . /usr/src/clarifai/

WORKDIR /usr/src/clarifai/
