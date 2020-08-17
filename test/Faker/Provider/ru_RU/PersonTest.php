<?php

namespace Faker\Test\Provider\ru_RU;

use Faker\Generator;
use Faker\Provider\ru_RU\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
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
}
