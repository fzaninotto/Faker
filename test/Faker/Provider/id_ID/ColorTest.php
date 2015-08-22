<?php

namespace Faker\Test\Provider\id_ID;

use Faker\Generator;
use Faker\Provider\id_ID\Color;

class ColorTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Color($faker));
        $this->faker = $faker;
    }

    public function testIfSafeColorNameCanReturnData()
    {
        $safeColorName = $this->faker->safeColorName();
        $this->assertNotEmpty($bankShortName);
    }
    
    public function testIfColorNameReturnData()
    {
        $colorName = $this->faker->colorName();
        $this->assertNotEmpty($colorName);
    }
    
}
