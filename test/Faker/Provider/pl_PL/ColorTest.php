<?php

namespace Faker\Test\Provider\pl_PL;

use Faker\Provider\pl_PL\Color;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class ColorTest extends TestCase
{
    public function testColorName(): void
    {
        self::assertEquals('mysi', $this->faker->colorName());
        self::assertEquals('alabastrowy', $this->faker->colorName());
    }

    public function testSafeColorName(): void
    {
        self::assertEquals('żółty', $this->faker->safeColorName());
        self::assertEquals('czarny', $this->faker->safeColorName());
    }

    protected function getProviders(): iterable
    {
        yield new Color($this->faker);
    }
}
