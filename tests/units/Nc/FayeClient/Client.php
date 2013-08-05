<?php

namespace tests\units\Nc\FayeClient;

use Nc\FayeClient\Client as TestedClass;
use mageekguy\atoum\test;

/**
 * Test client class
 */
class Client extends test
{
    /**
     * Test send method
     *
     * @return null
     */
    public function testSend()
    {
        $mockedAdapter = new \mock\Nc\FayeClient\Adapter\AdapterInterface;
        $this->if($client = new TestedClass($mockedAdapter, 'http://test.fr'))
            ->then
            ->if($client->send('/channel', array('data1' => 'test'), array('ext1' => 'test')))
                ->mock($mockedAdapter)
                    ->call('postJSON')
                        ->withIdenticalArguments('http://test.fr', '{"channel":"\/channel","data":{"data1":"test"},"ext":{"ext1":"test"}}')
                        ->once();
    }
}