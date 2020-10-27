<?php

namespace Faker\Test\Provider\ru_RU;

use Faker\Generator;
use Faker\Provider\ru_RU\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testLastNameFemale()
    {
        $this->assertEquals("а", substr($this->faker->lastName('female'), -2, 2));
    }

    public function testLastNameMale()
    {
        $this->assertNotEquals("а", substr($this->faker->lastName('male'), -2, 2));
    }

    public function testLastNameRandom()
    {
        $this->assertNotNull($this->faker->lastName());
    }

    public function testINN()
    {
        $this->assertRegExp('/^[0-9]{12}$/', $this->faker->inn);
        $this->assertEquals("77", substr($this->faker->inn("77"), 0, 2));
    }
}
