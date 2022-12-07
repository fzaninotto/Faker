<?php

namespace Faker\Test\Provider\en_ZA;

use Faker\Provider\en_ZA\PhoneNumber;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PhoneNumberTest extends TestCase
{
    public function testPhoneNumber(): void
    {
        for ($i = 0; $i < 10; ++$i) {
            $number = $this->faker->phoneNumber;

            $digits = array_values(array_filter(str_split($number), 'ctype_digit'));

            // 10 digits
            if ($digits[0] = 2 && $digits[1] == 7) {
                self::assertLessThanOrEqual(11, count($digits));
            } else {
                self::assertGreaterThanOrEqual(10, count($digits));
            }
        }
    }

    public function testTollFreePhoneNumber(): void
    {
        for ($i = 0; $i < 10; ++$i) {
            $number = $this->faker->tollFreeNumber;
            $digits = array_values(array_filter(str_split($number), 'ctype_digit'));

            if (count($digits) === 11) {
                self::assertEquals('0', $digits[0]);
            }

            $areaCode = $digits[0] . $digits[1] . $digits[2] . $digits[3];
            self::assertContains($areaCode, ['0800', '0860', '0861', '0862']);
        }
    }

    public function testCellPhoneNumber(): void
    {
        for ($i = 0; $i < 10; ++$i) {
            $number = $this->faker->mobileNumber;
            $digits = array_values(array_filter(str_split($number), 'ctype_digit'));

            if ($digits[0] = 2 && $digits[1] == 7) {
                self::assertLessThanOrEqual(11, count($digits));
            } else {
                self::assertGreaterThanOrEqual(10, count($digits));
            }

            self::assertMatchesRegularExpression(
                '/^(\+27|27)?(\()?0?([6][0-4]|[7][1-9]|[8][1-9])(\))?( |-|\.|_)?(\d{3})( |-|\.|_)?(\d{4})/',
                $number,
            );
        }
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
