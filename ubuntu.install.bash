#!/bin/bash

# run as root

# install dependencies
apt-get install php-pear php5-dev libcurl3-openssl-dev -y

# download extension
cd ~
pecl download id3-alpha
# extract
tar -zxvf id3*.tgz
cd id3*

# change function return value
# http://stackoverflow.com/questions/21103962/installing-pecl-id3-extension-on-ubuntu
# backup original
cp id3.c backup.id3.c
# make temp file with new value
sed -e "s/function_entry id3_functions[ ] = {/zend_function_entry id3_functions[ ] = {/" id3.c > temp_file
# replace original
mv temp_file id3.c

# build and install PECL extension
phpize
./configure
make
make test
make install

# enable extension in php
echo "extension=id3.so" >> /etc/php5/apache2/php.ini

# restart apache
service apache2 restart
