<?php


namespace Faker\Provider\tr_TR;

use Faker\Generator;
use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
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
