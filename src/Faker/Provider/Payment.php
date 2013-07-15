<?php

namespace Faker\Provider;

class Payment extends Base
{
    protected static $formats = array(
        '{{firstName}} {{lastName}}',
    );

    protected static $expirationDateFormat = "MM/yy";

    protected static $firstName = array('John', 'Jane');

    protected static $lastName = array('Doe');

    protected static $creditCards = array(
        array(
            'type' => 'American Express',
            'number' => '378282246310005'
        ),
        array(
            'type' => 'American Express',
            'number' => '371449635398431'
        ),
        array(
            'type' => 'American Express Corporate',
            'number' => '378734493671000'
        ),
        array(
            'type' => 'Australian BankCard',
            'number' => '5610591081018250'
        ),
        array(
            'type' => 'Diners Club',
            'number' => '30569309025904'
        ),
        array(
            'type' => 'Diners Club',
            'number' => '38520000023237'
        ),
        array(
            'type' => 'Discover',
            'number' => '6011111111111117'
        ),
        array(
            'type' => 'Discover',
            'number' => '6011000990139424'
        ),
        array(
            'type' => 'JCB',
            'number' => '3530111333300000'
        ),
        array(
            'type' => 'JCB',
            'number' => '3566002020360505'
        ),
        array(
            'type' => 'MasterCard',
            'number' => '5555555555554444'
        ),
        array(
            'type' => 'MasterCard',
            'number' => '5105105105105100'
        ),
        array(
            'type' => 'Visa',
            'number' => '4111111111111111'
        ),

        array(
            'type' => 'Visa',
            'number' => '4012888888881881'
        ),
        array(
            'type' => 'Visa',
            'number' => '4222222222222'
        ), //Note : Even though this number has a different character count than the other test numbers, it is the correct and functional number.
        array(
            'type' => 'Dankort (PBS)',
            'number' => '76009244561'
        ),
        array(
            'type' => 'Dankort (PBS)',
            'number' => '5019717010103742'
        ),
        array(
            'type' => 'Switch/Solo (Paymentech)',
            'number' => '6331101999990016'
        )
    );


    public function creditCard()
    {
        return static::randomElement(static::$creditCards);
    }

    public function creditCardType()
    {
        $cc = static::creditCard();
        return $cc['type'];
    }

    public function creditCardNumber()
    {
        $cc = static::creditCard();
        return $cc['number'];
    }

    /**
     * @example '04/13'
     */
    public function expirationDate($valid = true)
    {
        $dt = new \DateTime();
        if($valid) {
            $dt->modify("+1 year");
        } else {
            $dt->modify("-1 year");
        }
        return $dt->format(static::$expirationDateFormat);
    }

    /**
     * @example 'John Doe'
     */
    public function cardHolderName()
    {
        $format = static::randomElement(static::$formats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'John'
     */
    public static function firstName()
    {
        return static::randomElement(static::$firstName);
    }

    /**
     * @example 'Doe'
     */
    public static function lastName()
    {
        return static::randomElement(static::$lastName);
    }
}
