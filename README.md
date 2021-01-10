# kafka-demo

Шпаргалка по работе с Apache Kafka. Примеры кода на PHP.

## Требования

* ```docker```
* ```docker-compose```
* ```make```
* ```bash```

## Управление

* ```make up``` - запуск Zookeeper & Kafka.
* ```make down``` - остановка Zookeeper & Kafka.
* ```make restart``` - перезапуск Zookeeper & Kafka.

## Демо-команды

* ```make create-demo-topic``` - создает **demo** топик в Kafka.
* ```make describe-demo-topic``` - возвращает информацию о топике **demo**.
* ```make producer-demo-run``` - запускает producer для записи сообщений в топик **demo**.
* ```make consumer-demo-run``` - запускает consumer для чтения сообщений из топика **demo**.

## PHP демо

* ```make php-producer``` - пример php-producer, который пишет в топик **demo**.
* ```make php-consumer``` - пример php-consumer, который читает из топика **demo**.

### Библиотеки

* [https://github.com/weiboad/kafka-php](https://github.com/weiboad/kafka-php)
* [https://github.com/arnaud-lb/php-rdkafka](https://github.com/arnaud-lb/php-rdkafka) - ext-rdkafka.