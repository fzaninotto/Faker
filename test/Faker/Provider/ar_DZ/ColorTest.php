<?php

namespace Faker\Test\Provider\ar_DZ;

use Faker\Generator;
use Faker\Provider\ar_DZ\Color;
use PHPUnit\Framework\TestCase;

final class ColorTest extends TestCase
{
    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Color($faker));
        $this->faker = $faker;
    }

    public function testColorName()
    {
        $color = $this->faker->colorName;
        $this->assertNotEmpty($color);
        $this->assertInternalType('string', $color);
    }

    public function testSafeColorName()
    {
        $safeColor = $this->faker->safeColorName;
        $this->assertNotEmpty($safeColor);
        $this->assertInternalType('string', $safeColor);
    }
}
