<?php

namespace Faker\Test\Provider\id_ID;

use Faker\Generator;
use Faker\Provider\id_ID\Payment;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Payment($faker));
        $this->faker = $faker;
    }

    public function testIfBankShortNameCanReturnData()
    {
        $bankShortName = $this->faker->bankShortName();
        $this->assertNotEmpty($bankShortName);
    }
    
    public function testIfAccountNumberCanReturnData()
    {
        $accountNumber = $this->faker->bankAccountNumber();
        $this->assertNotEmpty($accountNumber);
    }
    
    public function testIfbBankAccountNumberRightFormat()
    {
        $accountNumber = $this->faker->bankAccountNumber('Bukopin');
        $this->assertEquals(10, strlen($accountNumber));
        
        $accountNumber = $this->faker->bankAccountNumber('Mandiri');
        $this->assertEquals(13, strlen($accountNumber));
        
        $accountNumber = $this->faker->bankAccountNumber('BCA');
        $this->assertEquals(10, strlen($accountNumber));
        
        $accountNumber = $this->faker->bankAccountNumber('BNI');
        $this->assertEquals(10, strlen($accountNumber));
        
        $accountNumber = $this->faker->bankAccountNumber('BRI');
        $this->assertEquals(15, strlen($accountNumber));
    }
}
