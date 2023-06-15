##################################################################
##########       Serveur Web Apache2 + PHP 7.4          ##########
##################################################################
FROM php:7.4-apache

MAINTAINER t.gueu@cld.be

ARG PUID
ARG PGID
ARG USER_NAME

############################
# Installation des paquets #
############################
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libcurl3-dev \
    libtidy-dev \
    libmagickwand-dev \
    libgeoip-dev \
    libmemcached-dev \
    libxml2-dev \
    mariadb-client \
    redis-tools \
    libonig-dev \
    ssh \
    libzip-dev \
    zip unzip \
    libyaml-dev \
    vim

###################################
# Installation des extensions PHP #
###################################

RUN docker-php-ext-configure gd --with-jpeg=/usr
RUN pecl install -o -f redis yaml \
  && rm -rf /tmp/pear \
  && docker-php-ext-enable redis \
  && docker-php-ext-enable yaml \
  && docker-php-ext-install \
    bcmath \
    intl \
    soap \
    gd \
    mbstring \
    curl \
    tidy \
    pdo pdo_mysql \
    zip \
    soap

#################################################
# Extensions non incluses dans la source de PHP #
#################################################

# APCu est compatible PHP7 depuis les versions 5.x
# Mais là on utilise l'extension de rétro-compatibilité qui délègue les appels apc vers apcu
# qui d'ailleurs n'existe pas dans le canal "stable" de PECL
# APCu doit absolument être chargé avant APC sinon l'extension ne fonctionne pas
# C'est pourquoi on définit nous-même le chargement dans le fichier INI

RUN pecl install apcu_bc-beta && docker-php-ext-enable --ini-name apc.ini apcu apc

RUN echo "apc.enable_cli=1" >> /usr/local/etc/php/conf.d/apc.ini

# imagick : requis par imagine/imagine
RUN pecl install imagick && docker-php-ext-enable imagick

# Memcached est compatible PHP7 depuis les versions 3.x

RUN pecl install memcached && docker-php-ext-enable memcached

# geoip est utilisé par le formulaire de contact pour avertir si IP semble suspecte
# geoip est compatible PHP 7 depuis la version 1.1.1
RUN pecl install geoip-1.1.1 && docker-php-ext-enable geoip

# Xdebug : requis pour déboguer uniquement
RUN pecl install xdebug-2.9.2 && docker-php-ext-enable xdebug
RUN echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.mode=develop,debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "debug.idekey = PHPSTORM" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.discover_client_host = true" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Alias
RUN echo "alias logs='tail -fn 200 /var/log/dlgamer/*.log'" >> /root/.bashrc

##############################
# Utilisateur non root dédié #
##############################

RUN addgroup --gid ${PGID} ${USER_NAME}
RUN adduser --uid ${PUID} --ingroup ${USER_NAME} --home /home/${USER_NAME} --disabled-password ${USER_NAME}

###########################
# Configuration de Apache #
###########################

##### Activation des modules Apache2
RUN a2enmod \
    access_compat \
    actions \
    alias \
    auth_basic \
    auth_digest \
    authn_anon \
    authn_core \
    authn_dbm \
    authn_file \
    authz_core \
    authz_groupfile \
    authz_host \
    authz_owner \
    authz_user \
    autoindex \
    cache \
    cgi cgid \
    charset_lite \
    dbd \
    deflate \
    dir \
    env \
    expires \
    ext_filter filter \
    headers \
    mime \
    mpm_prefork \
    negotiation \
    php7 \
    proxy proxy_ajp proxy_balancer proxy_connect proxy_ftp proxy_http \
    reqtimeout \
    rewrite \
    setenvif \
    slotmem_shm \
    ssl \
    status \
    unique_id \
    vhost_alias

##### Copie des fichiers propres à la configuration Apache2
RUN mkdir /var/sessions && \
    mkdir /var/log/dlgamer && \
    mkdir -p /var/www/html/dlgamer && \
    mkdir -p /var/www/html/partner/web && \
    chown -R ${PUID}:${PGID} /var/www/


RUN chmod -R 777 /var/sessions
RUN chmod -R 777 /var/log/dlgamer

COPY ./docker/confs/apache/server.crt /etc/apache2/ssl/server.crt
COPY ./docker/confs/apache/server.key /etc/apache2/ssl/server.key
COPY ./docker/confs/apache/dlgamer-ssl-oo.conf /etc/apache2/sites-available/dlgamer-ssl-oo.conf

##### Désactivation des configurations par défaut
RUN a2dissite 000-default default-ssl

##### Activation de la config du site
RUN a2ensite dlgamer-ssl-oo.conf
RUN a2enmod ssl
RUN a2enmod rewrite

########################
# Configuration de PHP #
########################

##### Copie des fichiers propres à la configuration PHP
COPY ./docker/confs/php/php7.ini /usr/local/etc/php/php.ini

##### Installation de composer
RUN curl -s http://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

#####################################
# Configuration de l'administration #
#####################################

RUN echo "admin:$apr1$k74ynwh2$EKC2RRc/QBLL.pm70EwY.." >> /home/${USER_NAME}/adminpassfile \
    && chown ${PUID}:${PGID} /home/${USER_NAME}/adminpassfile \
    && chmod 644 /home/${USER_NAME}/adminpassfile

##############################
# Configuration du conteneur #
##############################

RUN apt-get update && apt-get install -y nodejs npm \
    && npm install -g sass

EXPOSE 80
EXPOSE 443

##### Répertoire de travail par défaut
WORKDIR /var/www/html/dlgamer
