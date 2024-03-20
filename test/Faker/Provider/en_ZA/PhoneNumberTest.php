<?php

namespace Faker\Test\Provider\en_ZA;

use Faker\Generator;
use Faker\Provider\en_ZA\PhoneNumber;
use PHPUnit\Framework\TestCase;

final class PhoneNumberTest extends TestCase
{
    private Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testPhoneNumber(): void
    {
        for ($i = 0; $i < 10; ++$i) {
            $number = $this->faker->phoneNumber;

            $digits = \array_values(\array_filter(\str_split($number), 'ctype_digit'));

            // 10 digits
            if (2 === $digits[0] && 7 === $digits[1]) {
                $this->assertLessThanOrEqual(11, \count($digits));
            } else {
                $this->assertGreaterThanOrEqual(10, \count($digits));
            }
        }
    }

    public function testTollFreePhoneNumber(): void
    {
        for ($i = 0; $i < 10; ++$i) {
            $number = $this->faker->tollFreeNumber;
            $digits = \array_values(\array_filter(\str_split($number), 'ctype_digit'));

            if (11 === \count($digits)) {
                $this->assertEquals('0', $digits[0]);
            }

            $areaCode = $digits[0].$digits[1].$digits[2].$digits[3];
            $this->assertContains($areaCode, ['0800', '0860', '0861', '0862']);
        }
    }

    public function testCellPhoneNumber(): void
    {
        for ($i = 0; $i < 10; ++$i) {
            $number = $this->faker->mobileNumber;
            $digits = \array_values(\array_filter(\str_split($number), 'ctype_digit'));

            if (2 === $digits[0] && 7 === $digits[1]) {
                $this->assertLessThanOrEqual(11, \count($digits));
            } else {
                $this->assertGreaterThanOrEqual(10, \count($digits));
            }

            $this->assertMatchesRegularExpression('/^(\+27|27)?(\()?0?([6][0-4]|[7][1-9]|[8][1-9])(\))?( |-|\.|_)?(\d{3})( |-|\.|_)?(\d{4})/', $number);
        }
    }
}
