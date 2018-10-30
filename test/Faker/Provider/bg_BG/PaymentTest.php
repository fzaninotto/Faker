<?php

namespace Faker\Test\Provider\bg_BG;

use Faker\Generator;
use Faker\Provider\bg_BG\Payment;
use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
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
        $unspacedVat = $this->faker->vat(false);
        $this->assertRegExp('/^(BG \d{9,10})$/', $vat);
        $this->assertRegExp('/^(BG\d{9,10})$/', $unspacedVat);
    }
}
