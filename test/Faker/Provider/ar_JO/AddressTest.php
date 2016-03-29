<?php

namespace Faker\Test\Provider\ar_JO;

use Faker\Generator;
use Faker\Provider\ar_JO\Address;

class AddressTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Faker\Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testCityPrefix()
    {
        $cityPrefix = $this->faker->cityPrefix();
        $this->assertNotEmpty($cityPrefix);
        $this->assertInternalType('string', $cityPrefix);
        $this->assertRegExp('/\p{Arabic}/u', $cityPrefix);
    }

    public function testCityName()
    {
        $cityName = $this->faker->cityName();
        $this->assertNotEmpty($cityName);
        $this->assertInternalType('string', $cityName);
        $this->assertRegExp('/\p{Arabic}/u', $cityName);
    }

    public function testState()
    {
        $state = $this->faker->state();
        $this->assertNotEmpty($state);
        $this->assertInternalType('string', $state);
        $this->assertRegExp('/\p{Arabic}/u', $state);
    }
}

?>
