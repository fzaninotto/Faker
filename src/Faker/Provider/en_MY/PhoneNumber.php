<?php

namespace Faker\Provider\en_MY;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $internationalCodePrefix = array(
        '+60',
        '60',
    );

    protected static $zeroToEight = array(0, 1, 2, 3, 4, 5, 6, 7, 8);

    protected static $oneToNine = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

    protected static $mobileNumberFormats = array(
        '{{internationalCodePrefix}}1{{zeroToEight}}## ####',
        '{{internationalCodePrefix}} 1{{zeroToEight}}## ####',
        '0{{zeroToEight}}## ####',
        '{{internationalCodePrefix}}1{{oneToNine}}## ####',
        '{{internationalCodePrefix}} 1{{oneToNine}}## ####',
        '0{{oneToNine}}## ####',
        '01#########',
        '01### ######',
        '01### ### ###',
    );

    protected static $fixedLineNumberFormats = array(
        '{{internationalCodePrefix}}3### ####',
        '{{internationalCodePrefix}} 3### ####',
        '3### ####',
    );

    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Singapore#Numbering_plan
    protected static $formats = array(
        '{{mobileNumber}}',
        '{{fixedLineNumber}}',
    );

    protected static $tollFreeLineNumber = array(
        '1800 ### ####'
    );

    protected static $premiumPhoneNumber = array(
        '1300 ### ####'
    );

    public function tollFreeInternationalNumber()
    {
        return static::randomElement(static::$tollFreeInternationalNumber);
    }

    public function tollFreeLineNumber()
    {
        return static::randomElement(static::$tollFreeLineNumber);
    }

    public function premiumPhoneNumber()
    {
        return static::randomElement(static::$premiumPhoneNumber);
    }

    public function mobileNumber()
    {
        $format = static::randomElement(static::$mobileNumberFormats);

        return static::numerify($this->generator->parse($format));
    }

    public function fixedLineNumber()
    {
        $format = static::randomElement(static::$fixedLineNumberFormats);

        return static::numerify($this->generator->parse($format));
    }

    public function internationalCodePrefix()
    {
        $format = static::randomElement(static::$internationalCodePrefix);

        return $this->generator->parse($format);
    }

    public function zeroToEight()
    {
        return static::randomElement(static::$zeroToEight);
    }

    public function oneToNine()
    {
        return static::randomElement(static::$oneToNine);
    }
}
