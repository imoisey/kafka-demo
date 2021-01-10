<?php

use Kafka\Producer;
use Kafka\ProducerConfig;

require_once __DIR__ . '/../vendor/autoload.php';

$config = ProducerConfig::getInstance();
$config->setMetadataRefreshIntervalMs(10000);
$config->setMetadataBrokerList('kafka:9092');
$config->setBrokerVersion('1.0.0');
$config->setRequiredAck(1);
$config->setIsAsyn(false);
$config->setProduceInterval(500);

//$config->setSslLocalCert('/home/vagrant/code/kafka-php/ca-cert');
//$config->setSslLocalPk('/home/vagrant/code/kafka-php/ca-key');
//$config->setSslEnable(true);
//$config->setSslPassphrase('123456');
//$config->setSslPeerName('nmred');

$producer = new Producer();

for ($i = 0; $i < 1000; $i++) {
    $producer->send([
        [
            'topic' => 'demo',
            'value' => json_encode(['number' => $i]),
        ],
    ]);
}