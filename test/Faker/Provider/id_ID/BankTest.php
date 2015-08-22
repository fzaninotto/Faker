<?php

namespace Faker\Test\Provider\id_ID;

use Faker\Generator;
use Faker\Provider\id_ID\Payment;

class BankTest extends \PHPUnit_Framework_TestCase
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
        $accountNumber = $this->faker->accountNumber();
        $this->assertNotEmpty($accountNumber);
    }
    
    public function testIfAccountNumberRightFormat()
    {
        $accountNumber = $this->faker->accountNumber('Bukopin');
        $this->assertEquals(10, strlen($accountNumber));
        
        $accountNumber = $this->faker->accountNumber('Mandiri');
        $this->assertEquals(13, strlen($accountNumber));
        
        $accountNumber = $this->faker->accountNumber('BCA');
        $this->assertEquals(10, strlen($accountNumber));
        
        $accountNumber = $this->faker->accountNumber('BNI');
        $this->assertEquals(10, strlen($accountNumber));
        
        $accountNumber = $this->faker->accountNumber('BRI');
        $this->assertEquals(15, strlen($accountNumber));
    }
}
