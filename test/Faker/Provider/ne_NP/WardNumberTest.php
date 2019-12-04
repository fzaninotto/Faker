<?php

use Faker\Generator;
use Faker\Provider\ne_NP\Address;
use PHPUnit\Framework\TestCase;

final class WardNumberTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testWardNumberIsInteger()
    {
        $this->assertInternalType('int', $this->faker->wardNumber());
    }

    public function testWardNumberIsGreaterThanZero()
    {
        $this->assertGreaterThanOrEqual(1, $this->faker->wardNumber());
    }

    public function testWardNumberIsLessThanForty()
    {
        $this->assertLessThanOrEqual(36, $this->faker->wardNumber());
    }
}