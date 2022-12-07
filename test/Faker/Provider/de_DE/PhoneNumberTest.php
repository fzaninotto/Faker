<?php

namespace Faker\Test\Provider\de_DE;

use Faker\Provider\de_DE\PhoneNumber;
use Faker\Test\TestCase;

/**
 * @group legacy de
 */
final class PhoneNumberTest extends TestCase
{
    public function testPhoneNumber(): void
    {
        for ($i = 0; $i < 100; ++$i) {
            $number = $this->faker->phoneNumber();

            // Test format
            self::assertMatchesRegularExpression('/^(\+?49)?(0)?(\s?\(?\d{2,6}\)?)(\s?)(\d{3})(\s?)(\d{3,4})$/', $number);
        }
    }

    public function testE164PhoneNumberFormat(): void
    {
        for ($i = 0; $i < 100; ++$i) {
            $number = $this->faker->e164PhoneNumber();
            self::assertMatchesRegularExpression('/^(\+49)(\d{9,12})$/', $number);
        }
    }

    public function testMobileNumberFormat(): void
    {
        for ($i = 0; $i < 100; ++$i) {
            $number = $this->faker->mobileNumber();
            self::assertMatchesRegularExpression('/^(\+49)?(0)?(\s?)(\d{3,4})(\s?)(\d{3})(\s?)(\d{4})$/', $number);
        }
    }

    public function testTollFreeAreaCode(): void
    {
        self::assertContains($this->faker->tollFreeAreaCode(), [800]);
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
