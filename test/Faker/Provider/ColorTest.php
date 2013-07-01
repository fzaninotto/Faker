<?php

namespace Faker\Test\Provider;

use Faker\Provider\Color;

class ColorTest extends \PHPUnit_Framework_TestCase
{

    public function testHexColor()
    {
        $this->assertRegExp('/^#[a-f0-9]{6}$/i', Color::hexColor());
    }

    public function testRgbColorAsArray()
    {
        $this->assertEquals(3, count(Color::rgbColorAsArray()));
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

}
