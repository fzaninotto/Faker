<?php

namespace Faker\Provider\el_CY;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static array $formats = [
        '+3572#######',
        '+3579#######',
        '2#######',
        '9#######',
    ];

    /**
     * An array of el_CY mobile (cell) phone number formats.
     */
    protected static array $mobileFormats = [
        '9#######',
    ];

    /**
     * Return a el_CY mobile phone number.
     */
    public static function mobileNumber(): string
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
