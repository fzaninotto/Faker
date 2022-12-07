<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Provider\fr_FR\Color;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class ColorTest extends TestCase
{
    public function testColorName(): void
    {
        self::assertEquals('Mandarine', $this->faker->colorName());
        self::assertEquals('Acajou', $this->faker->colorName());
    }

    public function testSafeColorName(): void
    {
        self::assertEquals('bleu', $this->faker->safeColorName());
        self::assertEquals('noir', $this->faker->safeColorName());
    }

    protected function getProviders(): iterable
    {
        yield new Color($this->faker);
    }
}
