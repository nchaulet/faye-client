<?php

namespace Nc\FayeClient\Adapter;

use Guzzle\Service\ClientInterface;
use Guzzle\Service\Client;

/**
 * Guzzle adapter
 */
class GuzzleAdapter implements AdapterInterface
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * Constructor
     * @param ClientInterface $client Guzzle client
     */
    public function __construct(ClientInterface $client = null)
    {
        $this->client = null === $client ? new Client() : $client;
    }

    /**
     * {@inheritdoc}
     */
    public function postJSON($url, $body)
    {
        $this->client
            ->post($url, array('Content-Type' => 'application/json'), $body)
            ->send();
    }
}
