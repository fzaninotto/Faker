<?php

namespace Faker\Test\Provider\ar_EG;

use Faker\Calculator\Luhn;
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
        self::assertMatchesRegularExpression('/^2\d{13}$/', $nationalIdNumber);
        self::assertTrue(Luhn::isValid($nationalIdNumber));
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
