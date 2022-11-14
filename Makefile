up:
	docker-compose up -d
shell:
	docker-compose exec wp-training bash

stop:
	docker-compose stop

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

