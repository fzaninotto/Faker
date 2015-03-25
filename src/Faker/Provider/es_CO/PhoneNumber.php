<?php

namespace Faker\Provider\es_CO;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '2######',
        '3######',
        '4######',
        '5######',
        '6######',
        '7######',
        '8######',
    );
    protected static $mobilNumbers = array(
        '300#######',
        '301#######',
        '302#######',
        '311#######',
        '312#######',
        '315#######',
        '316#######',
        '317#######',
        '318#######',
        '319#######',
        '320#######',
        '350#######',
    );
    public static function mobilNumber()
    {
        return static::numerify(static::randomElement(static::$mobilNumbers));
    }
}
