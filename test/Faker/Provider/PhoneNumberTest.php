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
    public function testE164PhoneNumberFormat(): void
    {
        for ($i = 0; $i < 1000; ++$i) {
            $number = $this->faker->e164PhoneNumber();
            self::assertMatchesRegularExpression('/^\+[1-9]\d{1,14}$/', $number);
            self::assertLessThanOrEqual(16, strlen($number)); // plus-sign and max. 15 digits incl. CC-prefix
        }
    }

    public function testImeiReturnsValidNumber(): void
    {
        $imei = $this->faker->imei();
        self::assertTrue(Luhn::isValid($imei));
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
