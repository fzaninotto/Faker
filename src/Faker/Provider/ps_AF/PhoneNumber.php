<?php

namespace Faker\Provider\ps_AF;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Afghanistan
     */
    protected static $formats = array(
        '020########',
        '026########',
        '030########',
        '040########',
        '050########',
        '060########',
        '070########',
    );
    protected static $mobileNumberPrefixes = array(
        '070#######',
        '071#######',
        '079#######',
        '072#######',
        '078#######',
        '073#######',
        '077#######',
        '076#######',
        '074#######',
        '075#######',
        '07*#######'
    );
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileNumberPrefixes));
    }
}
