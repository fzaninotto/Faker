<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Provider\fr_FR\PhoneNumber;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PhoneNumberTest extends TestCase
{
    public function testMobileNumber()
    {
        $mobileNumber = $this->faker->mobileNumber();
        self::assertMatchesRegularExpression('/^(\+33 |\+33 \(0\)|0)(6|7)(?:(\s{1})?\d{2}){4}$/', $mobileNumber);
    }

    public function testMobileNumber07Format()
    {
        $mobileNumberFormat = $this->faker->phoneNumber07();
        self::assertMatchesRegularExpression('/^([3-9]{1})\d(\d{2}){3}$/', $mobileNumberFormat);
    }

    public function testMobileNumber07WithSeparatorFormat()
    {
        $mobileNumberFormat = $this->faker->phoneNumber07WithSeparator();
        self::assertMatchesRegularExpression('/^([3-9]{1})\d( \d{2}){3}$/', $mobileNumberFormat);
    }

    public function testServiceNumber()
    {
        $serviceNumber = $this->faker->serviceNumber();
        self::assertMatchesRegularExpression('/^(\+33 |\+33 \(0\)|0)8(?:(\s{1})?\d{2}){4}$/', $serviceNumber);
    }

    public function testServiceNumberFormat()
    {
        $serviceNumberFormat = $this->faker->phoneNumber08();
        self::assertMatchesRegularExpression('/^((0|1|2)\d{1}|9[^46])\d{6}$/', $serviceNumberFormat);
    }

    public function testServiceNumberWithSeparatorFormat()
    {
        $serviceNumberFormat = $this->faker->phoneNumber08WithSeparator();
        self::assertMatchesRegularExpression('/^((0|1|2)\d{1}|9[^46])( \d{2}){3}$/', $serviceNumberFormat);
    }

    public function testE164PhoneNumberFormat()
    {
        for ($i = 0; $i < 10; ++$i) {
            $number = $this->faker->e164PhoneNumber();
            self::assertMatchesRegularExpression('/^\+33\d{1,13}$/', $number);
        }
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
