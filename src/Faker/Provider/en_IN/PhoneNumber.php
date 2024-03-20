<?php

namespace Faker\Provider\en_IN;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static array $formats = [
        '+91 ## ########',
        '+91 ### #######',
        '0## ########',
        '0### #######',
    ];

    /**
     * An array of en_IN mobile (cell) phone number formats.
     */
    protected static array $mobileFormats = [
        '+91 9#########',
        '+91 8#########',
        '+91 7#########',
        '09#########',
        '08#########',
        '07#########',
    ];

    /**
     * Return a en_IN mobile phone number.
     */
    public static function mobileNumber(): string
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
