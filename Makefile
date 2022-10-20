up:
	sudo mkdir /home/whamoumi
	sudo chmod 777 /home/whamoumi
	sudo mkdir /home/whamoumi/data
	sudo chmod 777 /home/whamoumi/data
	sudo mkdir /home/whamoumi/data/mariadb_volume
	sudo mkdir /home/whamoumi/data/wordpress_volume
	sudo chmod 777 /home/whamoumi/data/mariadb_volume
	sudo chmod 777 /home/whamoumi/data/wordpress_volume
	docker-compose -f docker-compose.yml up
restart:
	docker-compose restart
stop:
	docker-compose stop