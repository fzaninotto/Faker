<?php


namespace test\Faker\Provider\en_GB;

use Faker\Generator;
use Faker\Provider\en_GB\Payment;

class PaymentTest extends \PHPUnit_Framework_TestCase
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

    /**
     *
     */
    public function testUkSortCode()
    {
        $sortcode = $this->faker->ukSortCode();
        $this->assertInternalType('string', $sortcode);
        $this->assertEquals(8, strlen($sortcode));
        $parts = explode('-', $sortcode);
        foreach ($parts as $part)
        {
            $this->assertEquals(1, preg_match('^\d+$^', $part));
        }
    }

    public function testUkBankAccount()
    {
        $UkBankAccount = $this->faker->ukBankAccountNumber();
        $this->assertInternalType('string', $UkBankAccount);
        $this->assertEquals(1, preg_match('^\d+$^', $UkBankAccount));
        $this->assertEquals(8, strlen($UkBankAccount));
        $UkBankAccount = $this->faker->ukBankAccountNumber('0123');
        $this->assertInternalType('string', $UkBankAccount);
        $this->assertEquals(1, preg_match('^\d+$^', $UkBankAccount));
        $this->assertEquals(8, strlen($UkBankAccount));
        $UkBankAccount = $this->faker->ukBankAccountNumber('hello');
        $this->assertInternalType('string', $UkBankAccount);
        $this->assertEquals(1, preg_match('^\d+$^', $UkBankAccount));
        $this->assertEquals(8, strlen($UkBankAccount));
    }
}