<?php

include __DIR__ . '/vendor/autoload.php';

$db = new ClickHouseDB\Client([
    'host' => 'clickhouse',
    'port' => '8123',
    'username' => 'default',
    'password' => ''
]);