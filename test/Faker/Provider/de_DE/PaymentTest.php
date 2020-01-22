<?php

namespace Faker\Test\Provider\de_DE;

use Faker\Generator;
use Faker\Provider\de_DE\Payment;
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
        $unspacedVat = $this->faker->vat();
        $vat = $this->faker->vat(true);
        $this->assertRegExp('/^(DE \d{9})$/', $vat);
        $this->assertRegExp('/^(DE\d{9})$/', $unspacedVat);
    }
}
