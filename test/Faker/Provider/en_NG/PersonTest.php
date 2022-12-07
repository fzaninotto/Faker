<?php

namespace Faker\Test\Provider\en_NG;

use Faker\Provider\en_NG\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testPersonNameIsAValidString(): void
    {
        $name = $this->faker->name;

        self::assertNotEmpty($name);
        self::assertIsString($name);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
