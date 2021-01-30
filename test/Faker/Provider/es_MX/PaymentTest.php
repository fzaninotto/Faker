<?php

namespace Faker\Test\Provider\es_MX;

use Faker\Generator;
use Faker\Provider\es_MX\Payment;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new Generator();
        $faker->seed(1);
        $faker->addProvider(new Payment($faker));
        $this->faker = $faker;
    }

    public function testClabe()
    {
        $clabe = $this->faker->clabe;
        $this->assertTrue($this->validateClabe($clabe));
    }

    public function validateClabe($clabe)
    {
        $crc = substr($clabe, -1);
        $number = substr($clabe, 0, -1);

        $weights = array(3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7);

        $weighted = array_map(function ($i, $w) {
            return substr(($i * $w) % 10, -1);
        }, str_split($number), $weights);

        $product = array_sum($weighted) % 10;
        return $crc == (10 - $product);
    }
}
