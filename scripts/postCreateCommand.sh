#! /bin/bash
echo "Installing depedencies"
npm install 
composer install 

echo "Configuring xdebug"
echo xdebug.log_level=0 | sudo tee -a /usr/local/etc/php/conf.d/xdebug.ini

echo "Starting docker"
docker-compose up -d

pwd > pwd.txt

file="/workspaces/wordpress6-dev-esst-782160-cs/htdocs/wp-config.php"
while test ! -f "$file"
do
  echo "hi" >> hi.txt
  sleep 1
done

sudo chmod 777 htdocs/ -R 
make update-wp-config
make install
