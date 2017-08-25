<?php

namespace Faker\Test\Provider\it_IT;

use Faker\Generator;
use Faker\Provider\it_IT\Address;

class AddressTest extends \PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testStateRegExp()
    {
        for ($i = 0; $i < 20; $i++) {
            $this->assertRegExp('/^[a-zA-Z]{2,3}$/', $this->faker->stateAbbr);
        }
    }

    public function testFullStateLength()
    {
        for ($i = 0; $i < 20; $i++) {
            $this->assertTrue(strlen($this->faker->fullState) > 0);
        }
    }

}
