<?php

namespace Faker\Provider\en_HK;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static array $formats = ['2#######', '3#######', '5#######', '6#######', '9#######'];
    protected static array $mobileFormats = ['5#######', '6#######', '9#######'];
    protected static array $landlineFormats = ['2#######', '3#######'];
    protected static array $faxFormats = ['7#######'];

    /**
     * Return an en_HK mobile phone number.
     */
    public static function mobileNumber(): string
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }

    /**
     * Return an en_HK landline number.
     */
    public static function landlineNumber(): string
    {
        return static::numerify(static::randomElement(static::$landlineFormats));
    }

    /**
     * Return an en_HK fax number.
     */
    public static function faxNumber(): string
    {
        return static::numerify(static::randomElement(static::$faxFormats));
    }
}
