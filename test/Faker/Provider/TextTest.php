<?php

namespace Faker\Test\Provider;

use Faker\Provider\en_US\Text;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class TextTest extends TestCase
{
    /**
     * @testWith [10]
     *           [20]
     *           [50]
     *           [70]
     *           [90]
     *           [120]
     *           [150]
     *           [200]
     *           [500]
     */
    public function testRealTextMaxLength($length): void
    {
        self::assertLessThan($length, strlen($this->faker->realText($length)));
    }

    /**
     * @testWith [10]
     *           [20]
     *           [50]
     *           [70]
     *           [90]
     *           [120]
     *           [150]
     *           [200]
     *           [500]
     */
    public function testRealTextMinLength($length): void
    {
        self::assertGreaterThanOrEqual($length * 0.8, strlen($this->faker->realText($length)));
    }

    public function testRealTextMaxIndex(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->faker->realText(200, 11);

        self::fail('The index should be less than or equal to 5.');
    }

    public function testRealTextMinIndex(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->faker->realText(200, 0);

        self::fail('The index should be greater than or equal to 1.');
    }

    public function testRealTextMinNbChars(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->faker->realText(9);

        self::fail('The text should be at least 10 characters.');
    }

    /**
     * @testWith [1, 10]
     *           [5, 10]
     *           [8, 10]
     *           [18, 20]
     *           [45, 50]
     *           [180, 200]
     *           [1950, 2000]
     */
    public function testRealTextBetweenTextLength($min, $max): void
    {
        $strlen = strlen($this->faker->realTextBetween($min, $max));

        self::assertGreaterThan($min, $strlen);
        self::assertLessThan($max, $strlen);
    }

    public function testRealTextBetweenMinNbChars(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->faker->realTextBetween(25, 20);

        self::fail('minNbChars should be smaller than maxNbChars');
    }

    public function testRealTextBetweenMinNbCharsGreaterThan1(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->faker->realTextBetween(0, 30);

        self::fail('minNbChars must be bigger than 0');
    }

    protected function getProviders(): iterable
    {
        yield new Text($this->faker);
    }
}
