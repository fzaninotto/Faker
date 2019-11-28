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
        $this->assertEquals("a", substr($this->faker->lastName('female'), -1));
    }

    public function testLastNameMale()
    {
        $this->assertNotEquals("a", substr($this->faker->lastName('male'), -1));
    }

    public function testLastNameRandom()
    {
        $this->assertNotNull($this->faker->lastName());
    }
}
