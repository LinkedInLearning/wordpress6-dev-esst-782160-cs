up:
	docker-compose up -d
shell:
	docker-compose exec wp-training bash

stop:
	docker-compose stop

update-wp-config:
	sed -i '122r scripts/wp-config-addendum.txt' htdocs/wp-config.php && sed -i -e "s/CODESPACE_NAME/$(CODESPACE_NAME)/g"  htdocs/wp-config.php 

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

