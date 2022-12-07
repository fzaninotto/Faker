<?php

namespace Faker\Provider\tr_TR;

use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PaymentTest extends TestCase
{
    public function testBankAccountNumber(): void
    {
        $accNo = $this->faker->bankAccountNumber;
        self::assertSame(substr($accNo, 0, 2), 'TR');
        self::assertSame(26, strlen($accNo));
    }

    protected function getProviders(): iterable
    {
        yield new Payment($this->faker);
    }
}
