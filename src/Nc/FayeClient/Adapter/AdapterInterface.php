<?php

/**
 * This file is part of faye client library
 */

namespace Nc\FayeClient\Adapter;

/**
 * Interface for HTTP adapter to make a post Request
 */
interface AdapterInterface
{
    /**
     * Exec a post request with json content type
     * @param string $url  url to request
     * @param string $body Body to send
     *
     * @return null
     */
    public function postJSON($url, $body);
}
