#! /bin/bash
echo "Installing depedencies"
npm install 
composer install 

echo "Configuring xdebug"
echo xdebug.log_level=0 | sudo tee -a /usr/local/etc/php/conf.d/xdebug.ini

echo "Starting docker"
docker-compose up -d

file="../htdocs/wp-config.php"
while test ! -f "$file"
do
  sleep 1
done

chmod 777 htdocs/ -R 
make update-wp-config
make install
