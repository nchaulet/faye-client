# Faye Client

[![Build Status](https://travis-ci.org/nchaulet/faye-client.png?branch=master)](https://travis-ci.org/nchaulet/faye-client)

PHP 5.3+ library to push message to a faye server.

[http://faye.jcoglan.com/](http://faye.jcoglan.com/)

## Instalation

via composer

``` js
{
    require  : {
        "nc/faye-client": "~1.0",
        # if you want to use guzzle adapter
        "guzzle/guzzle": "~3.0"
    }
}
```

## Usage

``` php
$adapter = new \Nc\FayeClient\Adapter\CurlAdapter;

$client = new Nc\FayeClient\Client($adapter, 'http://127.0.0.1/faye');

$client->send("/channel1", array("name" => "foo"), array("token" => "456454sdqd"));
```

## Client Send method documentation

``` php
/**
 * Send message
 * @param  string $channel message channel
 * @param  array  $data    Data to send
 * @param  array  $ext     Extra data
 */
public function send($channel, $data = array(), $ext = array());
```

## Adapter to post JSON

    * CurlAdapter   : `Nc\FayeClient\Adapter\CurlAdapter`
    * GuzzleAdapter : `Nc\FayeClient\Adapter\GuzzleAdapter`

## Run test

``` bash
php vendor/bin/atoum -D tests/ -bf tests/bootstrap.php
```
