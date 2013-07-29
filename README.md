# Faye Client

[![Build Status](https://travis-ci.org/nchaulet/faye-client.png?branch=master)](https://travis-ci.org/nchaulet/faye-client)

PHP 5.3+ library to push message to a faye server.

[http://faye.jcoglan.com/](http://faye.jcoglan.com/)

## Usage

	$adapter = new \Nc\FayeClient\Adapter\GuzzleAdapter;

	$client = new Nc\FayeClient\Client($adapter, 'http://127.0.0.1/faye');

	$client->send("/channel1", array("name" => "foo"), array("token" => "456454sdqd"))