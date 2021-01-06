#!/bin/bash

${KAFKA_HOME}/bin/kafka-console-producer.sh \
		--bootstrap-server localhost:9092 \
		--topic demo