<?php

use Kafka\Consumer;
use Kafka\ConsumerConfig;

require_once __DIR__ . '/../vendor/autoload.php';

$config = ConsumerConfig::getInstance();
$config->setClientId('demo-' . gethostname());
$config->setMetadataRefreshIntervalMs(10000);
$config->setMetadataBrokerList('kafka:9092');
$config->setGroupId('demo');
$config->setBrokerVersion('1.0.0');
$config->setTopics(['demo']);

// if use ssl connect
//$config->setSslLocalCert('/home/vagrant/code/kafka-php/ca-cert');
//$config->setSslLocalPk('/home/vagrant/code/kafka-php/ca-key');
//$config->setSslEnable(true);
//$config->setSslPassphrase('123456');
//$config->setSslPeerName('nmred');

$consumer = new Consumer();
$consumer->start(function ($topic, $part, $message): void {
    echo "Topic: $topic" . PHP_EOL;
    echo "Part: $part" . PHP_EOL;
    echo "Offset: {$message['offset']}" . PHP_EOL;
    echo "Message: {$message['message']['value']}" . PHP_EOL;

    echo PHP_EOL;
});