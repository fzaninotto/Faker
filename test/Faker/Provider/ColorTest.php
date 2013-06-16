<?php

namespace Faker\Test\Provider;

use Faker;

class ColorTest extends \PHPUnit_Framework_TestCase
{

	public function testHexColor()
	{
		$faker = Faker\Factory::create();
		$color = $faker->hexColor;
		$this->assertRegExp('/^#[a-f0-9]{6}$/i', $color);
	}

	public function testRgbColorAsArray()
	{
		$faker = Faker\Factory::create();
		$color = $faker->rgbColorAsArray;
		$this->assertEquals(3, count($color));
	}

	public function testRgbColor()
	{
		$faker = Faker\Factory::create();
		$color = $faker->rgbColor();
		$regexp = '([01]?[0-9]?[0-9]|2[0-4][0-9]|25[0-5])';
		$this->assertRegExp('/^' . $regexp . ',' . $regexp . ',' . $regexp . '$/i', $color);
	}

}