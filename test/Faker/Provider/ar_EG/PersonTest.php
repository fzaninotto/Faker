<?php

namespace Faker\Test\Provider\ar_EG;

use Faker\Provider\ar_EG\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testNationalIdNumber(): void
    {
        $nationalIdNumber = $this->faker->nationalIdNumber();
        self::assertMatchesRegularExpression('/^\d{14}$/', $nationalIdNumber);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
