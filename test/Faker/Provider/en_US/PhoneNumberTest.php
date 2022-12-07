<?php

namespace Faker\Test\Provider\en_US;

use Faker\Provider\en_US\PhoneNumber;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PhoneNumberTest extends TestCase
{
    public function testPhoneNumber(): void
    {
        for ($i = 0; $i < 100; ++$i) {
            $number = $this->faker->phoneNumber;
            $baseNumber = preg_replace('/ *x.*$/', '', $number); // Remove possible extension
            $digits = array_values(array_filter(str_split($baseNumber), 'ctype_digit'));

            // Prefix '1' allowed
            if (count($digits) === 11) {
                self::assertEquals('1', $digits[0]);
                $digits = array_slice($digits, 1);
            }

            // 10 digits
            self::assertCount(10, $digits);

            // Last two digits of area code cannot be identical
            self::assertNotEquals($digits[1], $digits[2]);

            // Last two digits of exchange code cannot be 1
            if ($digits[4] === 1) {
                self::assertNotEquals($digits[4], $digits[5]);
            }

            // Test format
            self::assertMatchesRegularExpression('/^(\+?1)?([ -.]*\d{3}[ -.]*| *\(\d{3}\) *)\d{3}[-.]?\d{4}$/', $baseNumber);
        }
    }

    public function testTollFreeAreaCode(): void
    {
        self::assertContains($this->faker->tollFreeAreaCode, [800, 822, 833, 844, 855, 866, 877, 888, 880, 887, 889]);
    }

    public function testTollFreePhoneNumber(): void
    {
        for ($i = 0; $i < 100; ++$i) {
            $number = $this->faker->tollFreePhoneNumber;
            $digits = array_values(array_filter(str_split($number), 'ctype_digit'));

            // Prefix '1' allowed
            if (count($digits) === 11) {
                self::assertEquals('1', $digits[0]);
                $digits = array_slice($digits, 1);
            }

            // 10 digits
            self::assertCount(10, $digits);

            $areaCode = $digits[0] . $digits[1] . $digits[2];
            self::assertContains($areaCode, ['800', '822', '833', '844', '855', '866', '877', '888', '880', '887', '889']);

            // Last two digits of exchange code cannot be 1
            if ($digits[4] === 1) {
                self::assertNotEquals($digits[4], $digits[5]);
            }

            // Test format
            self::assertMatchesRegularExpression('/^(\+?1)?([ -.]*\d{3}[ -.]*| *\(\d{3}\) *)\d{3}[-.]?\d{4}$/', $number);
        }
    }

    public function testE164PhoneNumberFormat(): void
    {
        for ($i = 0; $i < 10; ++$i) {
            $number = $this->faker->e164PhoneNumber();
            self::assertMatchesRegularExpression('/^\+1[2-9]\d{9}$/', $number);
        }
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
