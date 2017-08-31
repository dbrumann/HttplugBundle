<?php

namespace Http\HttplugBundle\Tests\Unit\ClientFactory;

use Http\HttplugBundle\ClientFactory\Guzzle6Factory;
use Http\Adapter\Guzzle6\Client;
use PHPUnit\Framework\TestCase;

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class Guzzle6FactoryTest extends TestCase
{
    public function testCreateClient()
    {
        $factory = new Guzzle6Factory();
        $client = $factory->createClient();

        $this->assertInstanceOf(Client::class, $client);
    }
}
