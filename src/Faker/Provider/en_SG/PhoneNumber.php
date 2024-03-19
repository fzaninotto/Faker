<?php

namespace Faker\Provider\en_SG;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static array $internationalCodePrefix = [
        '+65',
        '65',
    ];

    protected static array $zeroToEight = [0, 1, 2, 3, 4, 5, 6, 7, 8];

    protected static array $oneToEight = [1, 2, 3, 4, 5, 6, 7, 8];

    protected static array $mobileNumberFormats = [
        '{{internationalCodePrefix}}9{{zeroToEight}}## ####',
        '{{internationalCodePrefix}} 9{{zeroToEight}}## ####',
        '9{{zeroToEight}}## ####',
        '{{internationalCodePrefix}}8{{oneToEight}}## ####',
        '{{internationalCodePrefix}} 8{{oneToEight}}## ####',
        '8{{oneToEight}}## ####',
    ];

    protected static array $fixedLineNumberFormats = [
        '{{internationalCodePrefix}}6### ####',
        '{{internationalCodePrefix}} 6### ####',
        '6### ####',
    ];

    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Singapore#Numbering_plan
    protected static array $formats = [
        '{{mobileNumber}}',
        '{{fixedLineNumber}}',
    ];

    protected static array $voipNumber = [
        '{{internationalCodePrefix}}3### ####',
        '{{internationalCodePrefix}} 3### ####',
        '3### ####',
    ];

    protected static array $tollFreeInternationalNumber = [
        '800 ### ####',
    ];

    protected static array $tollFreeLineNumber = [
        '1800 ### ####',
    ];

    protected static array $premiumPhoneNumber = [
        '1900 ### ####',
    ];

    public function tollFreeInternationalNumber()
    {
        return static::randomElement(static::$tollFreeInternationalNumber);
    }

    public function tollFreeLineNumber()
    {
        return static::randomElement(static::$tollFreeLineNumber);
    }

    public function premiumPhoneNumber(): string
    {
        return static::randomElement(static::$premiumPhoneNumber);
    }

    public function mobileNumber(): string
    {
        $format = static::randomElement(static::$mobileNumberFormats);

        return static::numerify($this->generator->parse($format));
    }

    public function fixedLineNumber(): string
    {
        $format = static::randomElement(static::$fixedLineNumberFormats);

        return static::numerify($this->generator->parse($format));
    }

    public function voipNumber(): string
    {
        $format = static::randomElement(static::$voipNumber);

        return $this->generator->parse($format);
    }

    public function internationalCodePrefix(): string
    {
        $format = static::randomElement(static::$internationalCodePrefix);

        return $this->generator->parse($format);
    }

    public function zeroToEight(): string
    {
        return static::randomElement(static::$zeroToEight);
    }

    public function oneToEight(): string
    {
        return static::randomElement(static::$oneToEight);
    }
}
