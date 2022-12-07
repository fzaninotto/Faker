<?php

namespace Faker\Test\Provider;

use Faker\Provider\Color;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class ColorTest extends TestCase
{
    public function testHexColor(): void
    {
        self::assertMatchesRegularExpression('/^#[a-f0-9]{6}$/i', Color::hexColor());
    }

    public function testSafeHexColor(): void
    {
        self::assertMatchesRegularExpression('/^#[a-f0-9]{6}$/i', Color::safeHexColor());
    }

    public function testRgbColorAsArray(): void
    {
        self::assertCount(3, Color::rgbColorAsArray());
    }

    public function testRgbColor(): void
    {
        $regexp = '([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])';
        self::assertMatchesRegularExpression('/^' . $regexp . ',' . $regexp . ',' . $regexp . '$/i', Color::rgbColor());
    }

    public function testRgbCssColor(): void
    {
        $regexp = '([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])';
        self::assertMatchesRegularExpression('/^rgb\(' . $regexp . ',' . $regexp . ',' . $regexp . '\)$/i', Color::rgbCssColor());
    }

    public function testRgbaCssColor(): void
    {
        $regexp = '([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])';
        $regexpAlpha = '([01]?(\.\d+)?)';
        self::assertMatchesRegularExpression('/^rgba\(' . $regexp . ',' . $regexp . ',' . $regexp . ',' . $regexpAlpha . '\)$/i', Color::rgbaCssColor());
    }

    public function testSafeColorName(): void
    {
        self::assertMatchesRegularExpression('/^[\w]+$/', Color::safeColorName());
    }

    public function testColorName(): void
    {
        self::assertMatchesRegularExpression('/^[\w]+$/', Color::colorName());
    }

    public function testHslColor(): void
    {
        $regexp360 = '(?:36[0]|3[0-5][0-9]|[12][0-9][0-9]|[1-9]?[0-9])';
        $regexp100 = '(?:100|[1-9]?[0-9])';
        self::assertMatchesRegularExpression('/^' . $regexp360 . ',' . $regexp100 . ',' . $regexp100 . '$/', Color::hslColor());
    }

    public function testHslColorArray(): void
    {
        self::assertCount(3, Color::hslColorAsArray());
    }
}
