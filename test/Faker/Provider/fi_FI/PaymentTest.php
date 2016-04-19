<?php

namespace Faker\Test\Provider\fi_FI;

use Faker\Generator;
use Faker\Provider\fi_FI\Payment;

class PaymentTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Payment($faker));
        $this->faker = $faker;
    }

    public function testVatIsValid()
    {
        $vat = $this->faker->vat();
        $this->assertRegExp('/^(FI\d{8})$/', $vat);
    }
}
