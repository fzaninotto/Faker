<?php

namespace Faker\Test\Provider\zh_TW;

use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{

    private $addressClass;

    public function setUp()
    {
        $this->addressClass = new \ReflectionClass('Faker\Provider\zh_TW\Address');
    }

    protected function getMethod($name)
    {
        $method = $this->addressClass->getMethod($name);

        $method->setAccessible(true);

        return $method;
    }

    public function testCityPrefix()
    {
        $this->assertNotEmpty( $this->getMethod('cityPrefix')->invoke(null));
    }

    public function testCitySuffix()
    {
        $this->assertNotEmpty( $this->getMethod('citySuffix')->invoke(null));
    }
}
