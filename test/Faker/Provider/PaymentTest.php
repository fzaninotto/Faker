<?php

namespace Faker\Test\Provider;

use Faker\Provider\Payment;

class PaymentTest extends \PHPUnit_Framework_TestCase
{

    public function testExpirationDate()
    {
        $dt = new \DateTime('now');

        $expDate = Payment::expirationDate(true);
        $dt2 = \DateTime::createFromFormat(Payment::$expirationDateFormat, $expDate);
        $this->assertTrue($dt2 >= $dt);

        $expDate = Payment::expirationDate(false);
        $dt2 = \DateTime::createFromFormat(Payment::$expirationDateFormat, $expDate);
        $this->assertTrue($dt2 < $dt);

    }

    public function testRandomCard()
    {
        $card  = Payment::randomCard();
        $this->assertEquals(count($card), 4);
        $this->assertEquals(array('type','number','name','expirationDate'));

    }

}