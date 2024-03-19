<?php

namespace Faker\Provider\it_CH;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static array $formats = [
        '+41 (0)## ### ## ##',
        '+41(0)#########',
        '+41 ## ### ## ##',
        '0#########',
        '0## ### ## ##',
    ];

    /**
     * An array of Swiss mobile (cell) phone number formats.
     */
    protected static array $mobileFormats = [
        // Local
        '075 ### ## ##',
        '075#######',
        '076 ### ## ##',
        '076#######',
        '077 ### ## ##',
        '077#######',
        '078 ### ## ##',
        '078#######',
        '079 ### ## ##',
        '079#######',
    ];

    /**
     * Return a Swiss mobile phone number.
     */
    public static function mobileNumber(): string
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
