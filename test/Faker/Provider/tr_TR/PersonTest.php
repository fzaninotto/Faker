<?php

namespace Faker\Test\Provider\tr_TR;

use Faker\Calculator\TCNo;
use Faker\Provider\tr_TR\Person;
use Faker\Generator;
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

    public function testTCNo()
    {
        for ($i = 0; $i < 100; $i++) {
            $number = $this->faker->tcNo;

            $this->assertEquals(11, strlen($number));
            $this->assertTrue(TCNo::isValid($number));
        }
    }
}
