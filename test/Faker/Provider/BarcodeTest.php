<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Barcode;

class BarcodeTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Barcode($faker));
        $this->faker = $faker;
    }

    public function testEan8()
    {
        $this->assertRegExp('/[\d]{8}/', $this->faker->ean8());
    }

    public function testEan13()
    {
        $this->assertRegExp('/[\d]{13}/', $this->faker->ean13());
    }
}
