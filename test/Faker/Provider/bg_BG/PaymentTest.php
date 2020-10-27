<?php

namespace Faker\Test\Provider\bg_BG;

use Faker\Generator;
use Faker\Provider\bg_BG\Payment;
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
        $this->assertMatchesRegularExpression('/^(BG \d{9,10})$/', $vat);
        $this->assertMatchesRegularExpression('/^(BG\d{9,10})$/', $unspacedVat);
    }
}
