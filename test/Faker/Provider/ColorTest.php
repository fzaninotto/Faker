<?php

namespace Faker\Test\Provider;

use Faker\Provider\Color;
use PHPUnit\Framework\TestCase;

final class ColorTest extends TestCase
{

    public function testHexColor()
    {
        $this->assertRegExp('/^#[a-f0-9]{6}$/i', Color::hexColor());
    }

    public function testSafeHexColor()
    {
        $this->assertRegExp('/^#[a-f0-9]{6}$/i', Color::safeHexColor());
    }

    public function testRgbColorAsArray()
    {
        $this->assertCount(3, Color::rgbColorAsArray());
    }

    public function testRgbColor()
    {
        $regexp = '([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])';
        $this->assertRegExp('/^' . $regexp . ',' . $regexp . ',' . $regexp . '$/i', Color::rgbColor());
    }

    public function testRgbCssColor()
    {
        $regexp = '([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])';
        $this->assertRegExp('/^rgb\(' . $regexp . ',' . $regexp . ',' . $regexp . '\)$/i', Color::rgbCssColor());
    }

    public function testRgbaCssColor()
    {
        $regexp = '([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])';
        $regexpAlpha = '([01]?(\.\d+)?)';
        $this->assertRegExp('/^rgba\(' . $regexp . ',' . $regexp . ',' . $regexp . ',' . $regexpAlpha . '\)$/i', Color::rgbaCssColor());
    }

    public function testSafeColorName()
    {
        $this->assertRegExp('/^[\w]+$/', Color::safeColorName());
    }

    public function testColorName()
    {
        $this->assertRegExp('/^[\w]+$/', Color::colorName());
    }

    public function testHslColor()
    {
        $regexp360 = '(?:36[0]|3[0-5][0-9]|[12][0-9][0-9]|[1-9]?[0-9])';
        $regexp100 = '(?:100|[1-9]?[0-9])';
        $this->assertRegExp('/^' . $regexp360 . ',' . $regexp100 . ',' . $regexp100 . '$/', Color::hslColor());
    }

    public function testHslColorArray()
    {
        $this->assertCount(3, Color::hslColorAsArray());
    }
}
