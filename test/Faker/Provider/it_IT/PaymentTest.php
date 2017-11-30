<?php

namespace Faker\Test\Provider\it_IT;

use Faker\Generator;
use Faker\Provider\it_IT\Payment;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Payment($faker));
        $this->faker = $faker;
    }

    public function testIbanRegExp()
    {
        $regExp = '/^IT\d{2}[A-Z]\d{10}[0-9A-Z]{12}$/';

        for ($i = 0; $i < 20; $i++) {
            $this->assertRegExp($regExp, $this->faker->bankAccountNumber);
        }
    }

    public function testBankNameLength()
    {
        for ($i = 0; $i < 20; $i++) {
            $this->assertTrue(strlen($this->faker->bank) > 0);
        }
    }
}
