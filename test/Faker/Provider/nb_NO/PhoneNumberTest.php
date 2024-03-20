<?php

namespace Faker\Test\Provider\nb_NO;

use Faker\Generator;
use Faker\Provider\nb_NO\PhoneNumber;
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

    public function testMobileNumber(): void
    {
        for ($i = 0; $i < 10; ++$i) {
            $number = $this->faker->mobileNumber;

            // Check that number starts with 4 or 9 when country code is included
            if (11 === \strlen($number)) {
                $testChar = (int) \substr($number, 3, 1);
                $this->assertEquals(11, \strlen($number));
                $this->assertContains($testChar, [4, 9]);
                $this->assertMatchesRegularExpression('/^\+47[49]{1}[0-9]{7}$/', $number);
            }

            // Check numbers start with 4 or 9 when no country code is included
            if (10 === \strlen($number) || 8 === \strlen($number)) {
                $testChar = (int) \substr($number, 0, 1);
                $this->assertContains($testChar, [4, 9]);
            }

            if (10 === \strlen($number)) {
                $this->assertMatchesRegularExpression('/^[49]{1}[0-9]{2} [0-9]{2} [0-9]{3}$/', $number);
            }

            if (8 === \strlen($number)) {
                $this->assertMatchesRegularExpression('/^[49]{1}[0-9]{7}$/', $number);
            }
        }
    }
}
