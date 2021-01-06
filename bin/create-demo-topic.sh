#!/bin/bash

${KAFKA_HOME}/bin/kafka-topics.sh \
		--create \
		--zookeeper ${KAFKA_ZOOKEEPER_CONNECT} \
		--replication-factor 1 \
		--partitions 1 \
		--topic demo