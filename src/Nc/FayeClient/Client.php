<?php

namespace Nc\FayeClient;

use Nc\FayeClient\Adapter\AdapterInterface;

/**
 * Client for sending faye message
 */
class Client
{

    /**
     * Http Adapter
     * @var Adapter\AdapterInterface
     */
    protected $adapter;

    /**
     * Faye server url
     * @var string
     */
    protected $fayeServerUrl;

    /**
     * Client constructor
     * @param AdapterInterface $adapter       Http adapter to post JSON
     * @param string           $fayeServerUrl Url for faye server with mount poing
     */
    public function __construct(AdapterInterface $adapter, $fayeServerUrl)
    {
        $this->adapter       = $adapter;
        $this->fayeServerUrl = $fayeServerUrl;
    }

    /**
     * Send message
     * @param string $channel message channel
     * @param array  $data    Data to send
     * @param array  $ext     Extra data
     */
    public function send($channel, $data = array(), $ext = array())
    {
        $this->adapter->postJSON($this->fayeServerUrl, json_encode(array(
            'channel' => $channel,
            'data' => $data,
            'ext' => $ext,
        )));
    }
}
