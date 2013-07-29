<?php

namespace Nc\FayeClient\Adapter;
use Guzzle\Service\ClientInterface;
use Guzzle\Service\Client;

class GuzzleAdapter implements AdapterInterface
{
	public function __construct(ClientInterface $client = null)
	{
		$this->client = null === $client ? new Client() : $client;
	}

	public function postJSON($url, $body)
	{
		$this->client
			->post($url, array('Content-Type' => 'application/json'), $body)
			->send();
	}
}