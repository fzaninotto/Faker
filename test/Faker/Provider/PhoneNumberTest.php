<?php

namespace Faker\Test\Provider;

use Faker\Calculator\Luhn;
use Faker\Provider\PhoneNumber;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PhoneNumberTest extends TestCase
{
    public function testPhoneNumberFormat()
    {
        $number = $this->faker->e164PhoneNumber();
        self::assertMatchesRegularExpression('/^\+[0-9]{11,}$/', $number);
    }

    public function testImeiReturnsValidNumber()
    {
        $imei = $this->faker->imei();
        self::assertTrue(Luhn::isValid($imei));
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
