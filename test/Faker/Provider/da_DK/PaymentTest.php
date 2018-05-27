<?php

namespace Faker\Test\Provider\da_DK;

use Faker\Provider\da_DK\Payment;
use PHPUnit\Framework\TestCase;
use Faker\Generator;

class PaymentTest extends TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Payment($faker));
        $this->faker = $faker;
    }

    public function testBank()
    {
        $bankName = $this->faker->bank;
        $this->assertNotEmpty($bankName);

    }

    public function testLocalBankAccountNumber()
    {
        $accountNo = $this->faker->localBankAccountNumber;
        $this->assertEquals(10, strlen($accountNo));
        $this->assertNotEquals("0", $accountNo{3});

    }

    public function testLocalBankRegistrationNumber()
    {
        $registrationNumber = $this->faker->localBankRegistrationNumber;
        $this->assertEquals(4, strlen($registrationNumber));
    }


}