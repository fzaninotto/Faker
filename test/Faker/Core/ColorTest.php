<?php

declare(strict_types=1);

namespace Faker\Test\Core;

use Faker\Core\Color;
use Faker\Test\TestCase;

final class ColorTest extends TestCase
{
    public function testHexColor()
    {
        $color = new Color();
        self::assertMatchesRegularExpression('/^#[a-f0-9]{6}$/i', $color->hexColor());
    }

    public function testSafeHexColor()
    {
        $color = new Color();
        self::assertMatchesRegularExpression('/^#[a-f0-9]{6}$/i', $color->safeHexColor());
    }

    public function testRgbColorAsArray()
    {
        $color = new Color();
        self::assertCount(3, $color->rgbColorAsArray());
    }

    public function testRgbColor()
    {
        $color = new Color();
        $regexp = '([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])';
        self::assertMatchesRegularExpression('/^' . $regexp . ',' . $regexp . ',' . $regexp . '$/i', $color->rgbColor());
    }

    public function testRgbCssColor()
    {
        $color = new Color();
        $regexp = '([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])';
        self::assertMatchesRegularExpression('/^rgb\(' . $regexp . ',' . $regexp . ',' . $regexp . '\)$/i', $color->rgbCssColor());
    }

    public function testRgbaCssColor()
    {
        $color = new Color();
        $regexp = '([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])';
        $regexpAlpha = '([01]?(\.\d+)?)';
        self::assertMatchesRegularExpression('/^rgba\(' . $regexp . ',' . $regexp . ',' . $regexp . ',' . $regexpAlpha . '\)$/i', $color->rgbaCssColor());
    }

    public function testSafeColorName()
    {
        $color = new Color();
        self::assertMatchesRegularExpression('/^[\w]+$/', $color->safeColorName());
    }

    public function testColorName()
    {
        $color = new Color();
        self::assertMatchesRegularExpression('/^[\w]+$/', $color->colorName());
    }

    public function testHslColor()
    {
        $color = new Color();
        $regexp360 = '(?:36[0]|3[0-5][0-9]|[12][0-9][0-9]|[1-9]?[0-9])';
        $regexp100 = '(?:100|[1-9]?[0-9])';
        self::assertMatchesRegularExpression('/^' . $regexp360 . ',' . $regexp100 . ',' . $regexp100 . '$/', $color->hslColor());
    }

    public function testHslColorArray()
    {
        $color = new Color();
        self::assertCount(3, $color->hslColorAsArray());
    }
}
