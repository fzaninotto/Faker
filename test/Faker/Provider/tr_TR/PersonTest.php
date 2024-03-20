<?php

namespace Faker\Test\Provider\tr_TR;

use Faker\Calculator\TCNo;
use Faker\Generator;
use Faker\Provider\tr_TR\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    private Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testTCNo(): void
    {
        for ($i = 0; $i < 100; ++$i) {
            $number = $this->faker->tcNo;

            $this->assertEquals(11, \strlen($number));
            $this->assertTrue(TCNo::isValid($number));
        }
    }
}
