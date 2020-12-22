<?php

namespace Faker\Test\Provider\de_CH;

use Faker\Provider\de_CH\PhoneNumber;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PhoneNumberTest extends TestCase
{
    public function testPhoneNumber()
    {
        self::assertMatchesRegularExpression('/^0\d{2} ?\d{3} ?\d{2} ?\d{2}|\+41 ?(\(0\))?\d{2} ?\d{3} ?\d{2} ?\d{2}$/', $this->faker->phoneNumber());
    }

    public function testMobileNumber()
    {
        self::assertMatchesRegularExpression('/^07[56789] ?\d{3} ?\d{2} ?\d{2}$/', $this->faker->mobileNumber());
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
