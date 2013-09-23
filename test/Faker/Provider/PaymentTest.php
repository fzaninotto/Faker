<?php

namespace Faker\Test\Provider;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $faker->addProvider(new \Faker\Provider\DateTime($faker));
        $faker->addProvider(new \Faker\Provider\Person($faker));
        $faker->addProvider(new \Faker\Provider\Payment($faker));
        $this->faker = $faker;
    }

    public function testCreditCardTypeReturnsValidVendorName()
    {
        $this->assertTrue(in_array($this->faker->creditCardType, array('Visa', 'MasterCard', 'American Express', 'Discover Card')));
    }

    public function testCreditCardNumberReturnsValidCreditCardNumber()
    {
        $this->assertRegExp('/^6011\d{12}$/', $this->faker->creditCardNumber('Discover Card'));
    }

    public function testCreditCardNumberCanFormatOutput()
    {
        $this->assertRegExp('/^6011-\d{4}-\d{4}-\d{4}$/', $this->faker->creditCardNumber('Discover Card', true));
    }

    public function testCreditCardExpirationDateReturnsValidDateByDefault()
    {
        $expirationDate = $this->faker->creditCardExpirationDate;
        $this->assertTrue(intval($expirationDate->format('U')) > strtotime('now'));
        $this->assertTrue(intval($expirationDate->format('U')) < strtotime('+36 months'));
    }

    public function testRandomCard()
    {
        $cardDetails = $this->faker->creditCardDetails;
        $this->assertEquals(count($cardDetails), 4);
        $this->assertEquals(array('type', 'number', 'name', 'expirationDate'), array_keys($cardDetails));
    }
}
