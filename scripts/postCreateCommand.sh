#! /bin/bash
echo "Installing depedencies"
npm install 
composer install 

echo "Configuring xdebug"
echo xdebug.log_level=0 | sudo tee -a /usr/local/etc/php/conf.d/xdebug.ini

echo "Starting docker"
docker-compose up -d
