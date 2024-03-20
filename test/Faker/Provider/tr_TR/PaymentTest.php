<?php

namespace Faker\Provider\tr_TR;

use Faker\Generator;
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

    public function testBankAccountNumber(): void
    {
        $accNo = $this->faker->bankAccountNumber;
        $this->assertEquals('TR', \substr($accNo, 0, 2));
        $this->assertEquals(26, \strlen($accNo));
    }
}
