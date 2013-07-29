<?php

namespace Nc\FayeClient;

use Nc\FayeClient\Adapter\AdapterInterface;

class Client
{
	protected $adapter;

	protected $fayeServerUrl;

	public function __construct(AdapterInterface $adapter, $fayeServerUrl)
	{
		$this->adapter = $adapter;
		$this->fayeServerUrl = $fayeServerUrl;
	}

	public function send($channel, $data = array(), $ext = array())
	{
		$this->adapter->postJSON($this->fayeServerUrl, json_encode(array('channel' => $channel, 'data' => $data)));
	}
}