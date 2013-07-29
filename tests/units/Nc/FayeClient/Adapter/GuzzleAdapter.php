<?php

namespace tests\units\Nc\FayeClient\Adapter;

use mageekguy\atoum\test;
use Nc\FayeClient\Adapter\GuzzleAdapter as TestedClass;

/**
 * test Guzzle adapter
 */
class GuzzleAdapter extends test
{
	/**
	 * Test postJSON method
	 *
	 * @return null
	 */
	public function testPostJSON()
	{

		$mockedGuzzle = new \mock\Guzzle\Service\ClientInterface;

		$mockedRequest = new \mock\Guzzle\Http\Message\RequestInterface;

		$mockedGuzzle->getMockController()->post = function() use ($mockedRequest) {

			return $mockedRequest;
		};

		$this->if($adapter = new TestedClass($mockedGuzzle))
			->then
			->if($adapter->postJSON('http://test.fr', '{"test" : 1}'))
				->mock($mockedGuzzle)
					->call('post')
						->withIdenticalArguments('http://test.fr', array('Content-Type' => 'application/json'), '{"test" : 1}')
							->once()
				->mock($mockedRequest)
					->call('send')
						->once();
	}
}

