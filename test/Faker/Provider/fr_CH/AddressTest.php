<?php

namespace Faker\Test\Provider\fr_CH;

use Faker\Generator;
use Faker\Provider\fr_CH\Address;
use Faker\Provider\fr_CH\Person;
use Faker\Test\TestCase;

final class AddressTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testCanton ()
    {
        $canton = $this->faker->canton();
        $this->assertIsArray($canton);
        $this->assertCount(1, $canton);

        foreach ($canton as $cantonShort => $cantonName){
            $this->assertIsString($cantonShort);
            $this->assertEquals(2, strlen($cantonShort));
            $this->assertIsString($cantonName);
            $this->assertGreaterThan(2, strlen($cantonName));
        }
    }

    public function testCantonName ()
    {
        $cantonName = $this->faker->cantonName();
        $this->assertIsString($cantonName);
        $this->assertGreaterThan(2, strlen($cantonName));
    }

    public function testCantonShort ()
    {
        $cantonShort = $this->faker->cantonShort();
        $this->assertIsString($cantonShort);
        $this->assertEquals(2, strlen($cantonShort));
    }

    public function testAddress ()
    {
        $address = $this->faker->address();
        $this->assertIsString($address);
    }
}
