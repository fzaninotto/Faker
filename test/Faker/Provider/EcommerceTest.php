<?php

namespace Faker\Test\Provider;

class EcommerceTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\en_US\Ecommerce($faker));
        $faker->addProvider(new \Faker\Provider\Color($faker));
        $this->faker = $faker;
    }

    public function testCurrency()
    {
        $currency = $this->faker->currency;
        $this->assertEquals(3, strlen($currency));
        $this->assertEquals($currency, strtoupper($currency));
    }

    public function testPrice()
    {
        $this->assertRegExp('/\$\d{4},\d{2}/', $this->faker->price);
    }

    public function testManufacturer()
    {
        $this->assertTrue(is_string($this->faker->manufacturer));
    }

    public function testCategory()
    {
        $this->assertTrue(is_string($this->faker->category));
    }

    public function testProduct()
    {
        $this->assertTrue(is_string($this->faker->product));
    }
}
