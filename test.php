<?php

require_once __DIR__ . '/vendor/autoload.php';


$adapter = new \Nc\FayeClient\Adapter\GuzzleAdapter;
$client = new Nc\FayeClient\Client($adapter, 'http://home.nchaulet.fr:9000/faye');
$client->send("/test", array("lat" => "20", "lng" => "20"));