<?php

namespace Faker\Test\Provider\at_AT;

use Faker\Generator;
use Faker\Provider\at_AT\Payment;
use PHPUnit\Framework\TestCase;

final class PaymentTest extends TestCase
{
    private Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Payment($faker));
        $this->faker = $faker;
    }

    public function testVatIsValid(): void
    {
        $vat = $this->faker->vat();
        $unspacedVat = $this->faker->vat(false);
        $this->assertMatchesRegularExpression('/^(AT U\d{8})$/', $vat);
        $this->assertMatchesRegularExpression('/^(ATU\d{8})$/', $unspacedVat);
    }
}
