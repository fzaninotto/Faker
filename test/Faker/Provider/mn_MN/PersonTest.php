<?php

namespace Faker\Test\Provider\mn_MN;

use Faker\Provider\mn_MN\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testName(): void
    {
        self::assertMatchesRegularExpression('/^[А-Я]{1}\.[\w\W]+$/u', $this->faker->name);
    }

    public function testIdNumber(): void
    {
        self::assertMatchesRegularExpression('/^[А-Я]{2}\d{8}$/u', $this->faker->idNumber);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
