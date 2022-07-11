<?php

namespace Faker\Test\Provider\at_AT;

use Faker\Generator;
use Faker\Provider\at_AT\Payment;
use PHPUnit\Framework\TestCase;

final class PaymentTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Payment($faker));
        $this->faker = $faker;
    }

    public function testVatIsValid()
    {
        $vat = $this->faker->vat();
        $unspacedVat = $this->faker->vat(false);
        $this->assertRegExp('/^(AT U\d{8})$/', $vat);
        $this->assertRegExp('/^(ATU\d{8})$/', $unspacedVat);
    }
}
