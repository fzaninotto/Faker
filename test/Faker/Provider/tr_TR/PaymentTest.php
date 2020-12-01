<?php

namespace Faker\Test\Provider\tr_TR;

use Faker\Generator;
use Faker\Provider\tr_TR\Payment;
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

    public function testBankAccountNumber()
    {
        $accNo = $this->faker->bankAccountNumber;
        $this->assertEquals(substr($accNo, 0, 2), 'TR');
        $this->assertEquals(26, strlen($accNo));
    }
}
