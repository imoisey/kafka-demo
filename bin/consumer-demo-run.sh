#!/bin/bash

${KAFKA_HOME}/bin/kafka-console-consumer.sh \
		--bootstrap-server kafka:9092 \
		--topic demo \
		--from-beginning