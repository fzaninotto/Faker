<?php

namespace Faker\Provider\en_NZ;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * An array of en_NZ landline phone number formats.
     */
    protected static array $formats = [
        // National Calls
        '{{areaCode}}{{beginningNumber}}######',
        '{{areaCode}} {{beginningNumber}}## ####',
    ];

    /**
     * An array of en_NZ mobile (cell) phone number formats.
     */
    protected static array $mobileFormats = [
        // Local
        '02########',
        '02#########',
        '02# ### ####',
        '02# #### ####',
    ];

    /**
     * An array of toll free phone number formats.
     */
    protected static array $tollFreeFormats = [
        '0508######',
        '0508 ######',
        '0508 ### ###',
        '0800######',
        '0800 ######',
        '0800 ### ###',
    ];

    /**
     * An array of en_NZ landline area codes.
     */
    protected static array $areaCodes = [
        '02',
        '03',
        '04',
        '06',
        '07',
        '09',
    ];

    /**
     * An array of en_NZ landline beginning numbers.
     */
    protected static array $beginningNumbers = [
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
    ];

    /**
     * Return a en_NZ mobile phone number.
     */
    public static function mobileNumber(): string
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }

    /**
     * Return a en_NZ toll free phone number.
     */
    public static function tollFreeNumber(): string
    {
        return static::numerify(static::randomElement(static::$tollFreeFormats));
    }

    /**
     * Return a en_NZ landline area code.
     */
    public static function areaCode(): string
    {
        return static::numerify(static::randomElement(static::$areaCodes));
    }

    /**
     * Return a en_NZ landline beginning number.
     */
    public static function beginningNumber(): string
    {
        return static::numerify(static::randomElement(static::$beginningNumbers));
    }
}
