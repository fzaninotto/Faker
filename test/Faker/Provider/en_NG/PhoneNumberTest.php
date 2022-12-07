<?php

namespace Faker\Test\Provider\en_NG;

use Faker\Provider\en_NG\PhoneNumber;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PhoneNumberTest extends TestCase
{
    public function testPhoneNumberReturnsPhoneNumberWithOrWithoutCountryCode(): void
    {
        $phoneNumber = $this->faker->phoneNumber();

        self::assertNotEmpty($phoneNumber);
        self::assertIsString($phoneNumber);
        self::assertMatchesRegularExpression('/^(0|(\+234))\s?[789][01]\d\s?(\d{3}\s?\d{4})/', $phoneNumber);
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
