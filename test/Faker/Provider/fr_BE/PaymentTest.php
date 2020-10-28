<?php

namespace Faker\Test\Provider\fr_BE;

use Faker\Generator;
use Faker\Provider\fr_BE\Payment;
use Faker\Test\TestCase;

final class PaymentTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Payment($faker));
        $this->faker = $faker;
    }

    public function testVatIsValid()
    {
        $vat = $this->faker->vat();
        $unspacedVat = $this->faker->vat(false);
        $this->assertMatchesRegularExpression('/^(BE 0\d{9})$/', $vat);
        $this->assertMatchesRegularExpression('/^(BE0\d{9})$/', $unspacedVat);
    }
}
