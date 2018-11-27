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

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testPersonalINN()
    {
        $this->assertRegExp('/^[0-9]{12}$/', $this->faker->personalInn);
        $this->assertEquals("77", substr($this->faker->personalInn("77"), 0, 2));
        $this->assertEquals("02", substr($this->faker->personalInn(2), 0, 2));
    }

    public function testSNILS()
    {
        $this->assertRegExp('/^[0-9]{11}$/', $this->faker->snils);
        $this->assertNotRegExp('/^(.)\1\1$/', $this->faker->snils);
    }
}
