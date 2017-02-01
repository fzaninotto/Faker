<?php

namespace Faker\Test\Provider\de_DE;

use Faker\Generator;
use Faker\Provider\de_DE\Address;
use Faker\Provider\de_DE\Person;

class AddressTest extends \PHPUnit_Framework_TestCase
{
    
    /**
     * @var Generator
     */
    private $faker;
    
    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function state()
    {
        $state = $this->faker->state();
        $this->assertInternalType('array', $state);
        $this->assertCount(1, $state);

        $this->assertInternalType('string', key($state));
        $this->assertEquals(2, strlen(key($state)));
        $this->assertInternalType('string', current($state));
        $this->assertGreaterThan(2, strlen(current($state)));
    }

    public function stateName()
    {
        $stateName = $this->faker->stateName();
        $this->assertInternalType('string', $stateName);
        $this->assertGreaterThan(2, strlen($stateName));
    }

    public function stateShort()
    {
        $stateShort = $this->faker->stateShort();
        $this->assertInternalType('string', $stateShort);
        $this->assertEquals(2, strlen($stateShort));
    }

    public function address()
    {
        $address = $this->faker->address();
        $this->assertInternalType('string', $address);
    }
}
