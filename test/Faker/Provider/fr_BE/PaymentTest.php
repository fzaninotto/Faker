<?php

namespace Faker\Test\Provider\fr_BE;

use Faker\Provider\fr_BE\Payment;
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
        self::assertMatchesRegularExpression('/^(BE 0\d{9})$/', $vat);
        self::assertMatchesRegularExpression('/^(BE0\d{9})$/', $unspacedVat);
    }

    protected function getProviders(): iterable
    {
        yield new Payment($this->faker);
    }
}
