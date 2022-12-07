<?php

namespace Faker\Test\Provider\de_AT;

use Faker\Provider\de_AT\Payment;
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
        self::assertMatchesRegularExpression('/^(AT U\d{8})$/', $vat);
        self::assertMatchesRegularExpression('/^(ATU\d{8})$/', $unspacedVat);
    }

    public function testBankAccountNumber(): void
    {
        $accNo = $this->faker->bankAccountNumber;
        self::assertEquals(substr($accNo, 0, 2), 'AT');
        self::assertEquals(20, strlen($accNo));
    }

    protected function getProviders(): iterable
    {
        yield new Payment($this->faker);
    }
}
