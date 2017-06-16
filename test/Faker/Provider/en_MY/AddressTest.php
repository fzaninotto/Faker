<?php

namespace Faker\Test\Provider\en_MY;

use Faker\Factory;
use Faker\Provider\en_MY\Address;

class AddressTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = Factory::create('en_MY');
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testStreetNumber()
    {
        $this->assertRegExp('/^\d{2,3}$/', $this->faker->streetNumber());
    }

    public function testBlockNumber()
    {
        $this->assertRegExp('/^Blk\s*\d{2,3}[A-H]*$/i', $this->faker->blockNumber());
    }
}
