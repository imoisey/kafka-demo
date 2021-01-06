up: docker-up
down: docker-down
restart: docker-down docker-up

docker-up:
	@docker-compose up -d

docker-down:
	@docker-compose down --remove-orphans

docker-down-clear:
	@docker-compose down -v --remove-orphans --rmi local