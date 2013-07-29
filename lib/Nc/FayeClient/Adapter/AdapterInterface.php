<?php

namespace Nc\FayeClient\Adapter;

Interface AdapterInterface
{
	/**
	 * Exec a post request with json content type
	 * @param string $url  url to request
	 * @param string $body Body to send
	 */
	public function postJSON($url, $body);

}