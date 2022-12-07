<?php

declare(strict_types=1);

namespace Faker\Test\Core;

use Faker\Core\Color;
use Faker\Test\TestCase;

final class ColorTest extends TestCase
{
    public function testHexColor(): void
    {
        $color = new Color();
        self::assertMatchesRegularExpression('/^#[a-f0-9]{6}$/i', $color->hexColor());
    }

    public function testSafeHexColor(): void
    {
        $color = new Color();
        self::assertMatchesRegularExpression('/^#[a-f0-9]{6}$/i', $color->safeHexColor());
    }

    public function testRgbColorAsArray(): void
    {
        $color = new Color();
        self::assertCount(3, $color->rgbColorAsArray());
    }

    public function testRgbColor(): void
    {
        $color = new Color();
        $regexp = '([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])';
        self::assertMatchesRegularExpression('/^' . $regexp . ',' . $regexp . ',' . $regexp . '$/i', $color->rgbColor());
    }

    public function testRgbCssColor(): void
    {
        $color = new Color();
        $regexp = '([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])';
        self::assertMatchesRegularExpression('/^rgb\(' . $regexp . ',' . $regexp . ',' . $regexp . '\)$/i', $color->rgbCssColor());
    }

    public function testRgbaCssColor(): void
    {
        $color = new Color();
        $regexp = '([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])';
        $regexpAlpha = '([01]?(\.\d+)?)';
        self::assertMatchesRegularExpression('/^rgba\(' . $regexp . ',' . $regexp . ',' . $regexp . ',' . $regexpAlpha . '\)$/i', $color->rgbaCssColor());
    }

    public function testSafeColorName(): void
    {
        $color = new Color();
        self::assertMatchesRegularExpression('/^[\w]+$/', $color->safeColorName());
    }

    public function testColorName(): void
    {
        $color = new Color();
        self::assertMatchesRegularExpression('/^[\w]+$/', $color->colorName());
    }

    public function testHslColor(): void
    {
        $color = new Color();
        $regexp360 = '(?:36[0]|3[0-5][0-9]|[12][0-9][0-9]|[1-9]?[0-9])';
        $regexp100 = '(?:100|[1-9]?[0-9])';
        self::assertMatchesRegularExpression('/^' . $regexp360 . ',' . $regexp100 . ',' . $regexp100 . '$/', $color->hslColor());
    }

    public function testHslColorArray(): void
    {
        $color = new Color();
        self::assertCount(3, $color->hslColorAsArray());
    }
}
