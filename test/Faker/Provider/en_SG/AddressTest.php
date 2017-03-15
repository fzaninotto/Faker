<?php

namespace Faker\Test\Provider\en_SG;

use Faker\Factory;
use Faker\Provider\en_SG\Address;

class AddressTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = Factory::create('en_SG');
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
