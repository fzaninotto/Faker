<?php

namespace Faker\Provider\en_SG;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Singapore#Numbering_plan
    protected static $formats = array(
        '{{fixedLineNumber}}',
        '{{mobileNumber}}',
    );

    protected static $internationalCodePrefix = array(
        '+65',
        '65',
    );

    protected static $zeroToEight = [0, 1, 2, 3, 4, 5, 6, 7, 8];

    protected static $oneToNine = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    protected static $mobileNumber = array(
        '{{internationalCodePrefix}}9{{zeroToEight}}## ####',
        '{{internationalCodePrefix}} 9{{zeroToEight}}## ####',
        '9{{zeroToEight}}## ####',
        '{{internationalCodePrefix}}8{{oneToNine}}## ####',
        '{{internationalCodePrefix}} 8{{oneToNine}}## ####',
        '8{{oneToNine}}## ####',
        '{{internationalCodePrefix}}7{{oneToNine}}## ####',
        '{{internationalCodePrefix}} 7{{oneToNine}}## ####',
        '7{{oneToNine}}## ####',
    );

    protected static $fixedLineNumber = array(
        '{{internationalCodePrefix}}6### ####',
        '{{internationalCodePrefix}} 6### ####',
        '6### ####',
    );

    protected static $voipNumber = array(
        '{{internationalCodePrefix}}3### ####',
        '{{internationalCodePrefix}} 3### ####',
        '3### ####',
    );

    protected static $tollFreeInternationalNumber = array(
        '800 ### ####'
    );

    protected static $tollFreeLineNumber = array(
        '1800 ### ####'
    );

    protected static $premiumPhoneNumber = array(
        '1900 ### ####'
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
        return static::randomElement(static::$mobileNumber);
    }

    public function fixedLineNumber()
    {
        return static::randomElement(static::$fixedLineNumber);
    }

    public function voipNumber()
    {
        return static::randomElement(static::$voipNumber);
    }

    public function internationalCodePrefix()
    {
        return static::randomElement(static::$internationalCodePrefix);
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
