<?php

namespace Faker\Test\Provider;

use Faker\Calculator\Luhn;
use Faker\Generator;
use Faker\Provider\Base as BaseProvider;
use Faker\Provider\DateTime as DateTimeProvider;
use Faker\Provider\Payment as PaymentProvider;
use Faker\Provider\Person as PersonProvider;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new BaseProvider($faker));
        $faker->addProvider(new DateTimeProvider($faker));
        $faker->addProvider(new PersonProvider($faker));
        $faker->addProvider(new PaymentProvider($faker));
        $this->faker = $faker;
    }

    public function testCreditCardTypeReturnsValidVendorName()
    {
        $this->assertTrue(in_array($this->faker->creditCardType, array('Visa', 'MasterCard', 'American Express', 'Discover Card')));
    }

    public function creditCardNumberProvider()
    {
        return array(
            array('Discover Card', '/^6011\d{12}$/'),
            array('Visa', '/^4\d{12,15}$/'),
            array('MasterCard', '/^5[1-5]\d{14}$/')
        );
    }

    /**
     * @dataProvider creditCardNumberProvider
     */
    public function testCreditCardNumberReturnsValidCreditCardNumber($type, $regexp)
    {
        $cardNumber = $this->faker->creditCardNumber($type);
        $this->assertRegExp($regexp, $cardNumber);
        $this->assertTrue(Luhn::isValid($cardNumber));
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
