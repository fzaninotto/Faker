<?php

namespace Faker\Test\Provider\en_SG;

use Faker\Provider\en_SG\PhoneNumber;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PhoneNumberTest extends TestCase
{
    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Singapore#Numbering_plan
    // x means 0 to 9
    // y means 0 to 8 only
    public function testMobilePhoneNumberStartWith9Returns9yxxxxxx(): void
    {
        $startsWith9 = false;

        while (!$startsWith9) {
            $mobileNumber = $this->faker->mobileNumber();
            $startsWith9 = preg_match('/^(\+65|65)?\s*9/', $mobileNumber);
        }

        self::assertMatchesRegularExpression('/^(\+65|65)?\s*9\s*[0-8]\d{2}\s*\d{4}$/', $mobileNumber);
    }

    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Singapore#Numbering_plan
    // x means 0 to 9
    // z means 1 to 8 only
    public function testMobilePhoneNumberStartWith8Returns8zxxxxxx(): void
    {
        $startsWith8 = false;

        while (!$startsWith8) {
            $mobileNumber = $this->faker->mobileNumber();
            $startsWith8 = preg_match('/^(\+65|65)?\s*8/', $mobileNumber);
        }
        self::assertMatchesRegularExpression('/^(\+65|65)?\s*8\s*[1-8]\d{2}\s*\d{4}$/', $mobileNumber);
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }

    public function testTollFreeInternationalNumber(): void
    {
        self::assertMatchesRegularExpression('/^800\s*\d{3}\s*\d{4}$/', $this->faker->tollFreeInternationalNumber);
    }

    public function testTollFreeLineNumber(): void
    {
        self::assertMatchesRegularExpression('/^1800\s*\d{3}\s*\d{4}$/', $this->faker->tollFreeLineNumber);
    }

    public function testPremiumPhoneNumber(): void
    {
        self::assertMatchesRegularExpression('/^1900\s*\d{3}\s*\d{4}$/', $this->faker->premiumPhoneNumber);
    }

    public function testFixedLineNumber(): void
    {
        self::assertMatchesRegularExpression('/^(\+65|65)?\s*6\d{3}\s*\d{4}$/', $this->faker->fixedLineNumber);
    }

    public function testVoipNumber(): void
    {
        self::assertMatchesRegularExpression('/^(\+65|65)?\s*3\d{3}\s*\d{4}$/', $this->faker->voipNumber);
    }
}
