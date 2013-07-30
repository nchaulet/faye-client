# Faye Client

[![Build Status](https://travis-ci.org/nchaulet/faye-client.png?branch=master)](https://travis-ci.org/nchaulet/faye-client)

PHP 5.3+ library to push message to a faye server.

[http://faye.jcoglan.com/](http://faye.jcoglan.com/)

## Instalation 

via composer

	require  : {
		"nc/faye-client": "~1.0",
		# if you want to use guzzle adapter
		"guzzle/guzzle": "~3.0"
	}

## Usage

	$adapter = new \Nc\FayeClient\Adapter\GuzzleAdapter;

	$client = new Nc\FayeClient\Client($adapter, 'http://127.0.0.1/faye');

	$client->send("/channel1", array("name" => "foo"), array("token" => "456454sdqd"))

## Client Send method documentation

	/**
     * Send message
     * @param  string $channel message channel
     * @param  array  $data    Data to send
     * @param  array  $ext     Extra data
     */
    public function send($channel, $data = array(), $ext = array())
