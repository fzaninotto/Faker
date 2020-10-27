<?php

namespace Faker\Test\Provider\ar_DZ;

use Faker\Generator;
use Faker\Provider\ar_DZ\Payment;
use Faker\Provider\ar_DZ\Person;
use Faker\Provider\DateTime;
use PHPUnit\Framework\TestCase;

final class PaymentTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Payment($faker));
        $faker->addProvider(new Person($faker));
        $faker->addProvider(new DateTime($faker));
        $this->faker = $faker;
    }
    public function testifIBANisValid()
    {
        $iban = $this->faker->iban('DZ');
        $this->assertNotNull($iban);
    }

    public function testCreditCardDetails()
    {
        $details = $this->faker->creditCardDetails();
        $this->assertNotEmpty($details);
        $this->assertInternalType('array', $details);
    }
}
