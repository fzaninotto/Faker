<?php

namespace Faker\Provider\en_GB;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static array $formats = [
        '+44(0)##########',
        '+44(0)#### ######',
        '+44(0)#########',
        '+44(0)#### #####',
        '0##########',
        '0#########',
        '0#### ######',
        '0#### #####',
        '0### ### ####',
        '0### #######',
        '(0####) ######',
        '(0####) #####',
        '(0###) ### ####',
        '(0###) #######',
    ];

    /**
     * An array of en_GB mobile (cell) phone number formats.
     */
    protected static array $mobileFormats = [
        // Local
        '07#########',
        '07### ######',
        '07### ### ###',
    ];

    /**
     * Return a en_GB mobile phone number.
     */
    public static function mobileNumber(): string
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
