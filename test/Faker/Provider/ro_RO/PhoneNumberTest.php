<?php

namespace Faker\Test\Provider\ro_RO;

use Faker\Provider\ro_RO\PhoneNumber;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PhoneNumberTest extends TestCase
{
    public function testPhoneNumberReturnsNormalPhoneNumber(): void
    {
        self::assertMatchesRegularExpression('/^0(?:[23][13-7]|7\d)\d{7}$/', $this->faker->phoneNumber());
    }

    public function testTollFreePhoneNumberReturnsTollFreePhoneNumber(): void
    {
        self::assertMatchesRegularExpression('/^08(?:0[01267]|70)\d{6}$/', $this->faker->tollFreePhoneNumber());
    }

    public function testPremiumRatePhoneNumberReturnsPremiumRatePhoneNumber(): void
    {
        self::assertMatchesRegularExpression('/^090[036]\d{6}$/', $this->faker->premiumRatePhoneNumber());
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
