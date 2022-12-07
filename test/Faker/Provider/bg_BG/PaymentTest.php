<?php

namespace Faker\Test\Provider\bg_BG;

use Faker\Provider\bg_BG\Payment;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PaymentTest extends TestCase
{
    public function testVatIsValid(): void
    {
        $vat = $this->faker->vat();
        $unspacedVat = $this->faker->vat(false);
        self::assertMatchesRegularExpression('/^(BG \d{9,10})$/', $vat);
        self::assertMatchesRegularExpression('/^(BG\d{9,10})$/', $unspacedVat);
    }

    protected function getProviders(): iterable
    {
        yield new Payment($this->faker);
    }
}
