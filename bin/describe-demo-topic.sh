#!/bin/bash

${KAFKA_HOME}/bin/kafka-topics.sh \
		--describe \
		--zookeeper ${KAFKA_ZOOKEEPER_CONNECT} \
		--topic demo