<?php

namespace Faker\Test\Provider\tr_TR;

use Faker\Calculator\TCNo;
use Faker\Provider\tr_TR\Person;
use Faker\Test\TestCase;

final class PersonTest extends TestCase
{
    public function testTCNo()
    {
        for ($i = 0; $i < 100; ++$i) {
            $number = $this->faker->tcNo;

            self::assertEquals(11, strlen($number));
            self::assertTrue(TCNo::isValid($number));
        }
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
