up: docker-up
down: docker-down
restart: docker-down docker-up

docker-up:
	@docker-compose up -d

docker-down:
	@docker-compose down --remove-orphans

docker-down-clear:
	@docker-compose down -v --remove-orphans --rmi local

create-demo-topic:
	@docker-compose exec kafka /demo/bin/create-demo-topic.sh

describe-demo-topic:
	@docker-compose exec kafka /demo/bin/describe-demo-topic.sh

producer-demo-run:
	@docker-compose exec kafka /demo/bin/producer-demo-run.sh

consumer-demo-run:
	@docker-compose exec kafka /demo/bin/consumer-demo-run.sh