<?php

declare(strict_types=1);

namespace Faker\Test\Core;

use Faker\Test\TestCase;

final class NumberTest extends TestCase
{
    public function testRandomDigitReturnsInteger()
    {
        self::assertIsInt($this->faker->randomDigit());
    }

    public function testRandomDigitReturnsDigit()
    {
        self::assertGreaterThanOrEqual(0, $this->faker->randomDigit());
        self::assertLessThan(10, $this->faker->randomDigit());
    }

    public function testRandomDigitNotNullReturnsNotNullDigit()
    {
        self::assertGreaterThan(0, $this->faker->randomDigitNotZero());
        self::assertLessThan(10, $this->faker->randomDigitNotZero());
    }

    public function testRandomDigitNotReturnsValidDigit()
    {
        for ($i = 0; $i <= 9; ++$i) {
            self::assertGreaterThanOrEqual(0, $this->faker->randomDigitNot($i));
            self::assertLessThan(10, $this->faker->randomDigitNot($i));
            self::assertNotSame($this->faker->randomDigitNot($i), $i);
        }
    }

    public function testRandomNumberThrowsExceptionWhenCalledWithATooHighNumberOfDigits()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->randomNumber(10);
    }

    public function testRandomNumberReturnsInteger()
    {
        self::assertIsInt($this->faker->randomNumber());
        self::assertIsInt($this->faker->randomNumber(5, false));
    }

    public function testRandomNumberReturnsDigit()
    {
        self::assertGreaterThanOrEqual(0, $this->faker->randomNumber(3));
        self::assertLessThan(1000, $this->faker->randomNumber(3));
    }

    public function testRandomNumberAcceptsStrictParamToEnforceNumberSize()
    {
        self::assertEquals(5, strlen((string) $this->faker->randomNumber(5, true)));
    }

    public function testNumberBetween()
    {
        $min = 5;
        $max = 6;

        self::assertGreaterThanOrEqual($min, $this->faker->numberBetween($min, $max));
        self::assertGreaterThanOrEqual($this->faker->numberBetween($min, $max), $max);
    }

    public function testNumberBetweenAcceptsZeroAsMax()
    {
        self::assertEquals(0, $this->faker->numberBetween(0, 0));
    }

    public function testRandomFloat()
    {
        $min = 4;
        $max = 10;
        $nbMaxDecimals = 8;

        $result = $this->faker->randomFloat($nbMaxDecimals, $min, $max);

        $parts = explode('.', (string) $result);

        self::assertIsFloat($result);
        self::assertGreaterThanOrEqual($min, $result);
        self::assertLessThanOrEqual($max, $result);
        self::assertLessThanOrEqual($nbMaxDecimals, strlen($parts[1]));
    }
}
