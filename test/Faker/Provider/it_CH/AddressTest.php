<?php

namespace Faker\Test\Provider\it_CH;

use Faker\Generator;
use Faker\Provider\it_CH\Address;

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

    /**
     * @test
     */
    public function canton ()
    {
        $canton = $this->faker->canton();
        $this->assertInternalType('array', $canton);
        $this->assertArrayHasKey('short', $canton);;
        $this->assertArrayHasKey('name', $canton);
    }

    /**
     * @test
     */
    public function cantonName ()
    {
        $cantonName = $this->faker->cantonName();
        $this->assertInternalType('string', $cantonName);
        $this->assertGreaterThan(2, strlen($cantonName));
    }

    /**
     * @test
     */
    public function cantonShort ()
    {
        $cantonShort = $this->faker->cantonShort();
        $this->assertInternalType('string', $cantonShort);
        $this->assertEquals(2, strlen($cantonShort));
    }
}
