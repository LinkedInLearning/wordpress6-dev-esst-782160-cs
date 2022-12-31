up:
	docker-compose up -d
shell:
	docker-compose exec wp-training bash

stop:
	docker-compose stop

LINE_NUMBER=$(shell grep -n -o 'stop editing!' htdocs/wp-config.php | cut -d ':' -f 1)
update-wp-config:
	sed -i '$(LINE_NUMBER)r scripts/wp-config-addendum.txt' htdocs/wp-config.php && sed -i -e "s/CODESPACE_NAME/$(CODESPACE_NAME)/g"  htdocs/wp-config.php

install:
	docker run -it --rm \
    --volumes-from wp6-training \
    --network container:wp6-training \
    -e WORDPRESS_DB_USER=wordpress \
    -e WORDPRESS_DB_PASSWORD=wordpress \
    -e WORDPRESS_DB_HOST=db \
    wordpress:cli wp core install --url=https://$(CODESPACE_NAME) --title=WordPress --admin_user=admin --admin_password=password --admin_email=mail@example.com --locale=de_DE

cli:
	docker run -it --rm \
    --volumes-from wp6-training \
    --network container:wp6-training \
    -e WORDPRESS_DB_USER=wordpress \
    -e WORDPRESS_DB_PASSWORD=wordpress \
    -e WORDPRESS_DB_HOST=db \
    wordpress:cli bash

node:
	docker run -it --rm \
    --volumes-from wp6-training \
    --network container:wp6-training \
    node:19 bash

