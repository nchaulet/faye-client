<?php

/**
 * This file is part of faye client library
 */

namespace Nc\FayeClient\Adapter;

/**
 * Curl adapter to make a post request
 */
class CurlAdapter implements AdapterInterface
{
    /**
     * Exec a post request with json content type
     * @param string $url  url to request
     * @param string $body Body to send
     *
     * @return null
     */
    public function postJSON($url, $body)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($body),
        ));
        
        curl_exec($curl);
        
        curl_close($curl);
    }
}
