<?php

namespace Faker\Provider\lt_LT;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $mobile = array(
        '86#######',
        '+3706######',
        '3706######',
    );

    protected static $formats = array(
        '52-######',
        '528#####',
        '3706## ## ###',
        '+370 6######',
        '+3706######',
        '3706######',
        '86#######',
        '6##-##-###',
        '6#######',
    );

    public static function mobilePhoneNumber()
    {
        return static::numerify(static::randomElement(static::$mobile));
    }
}
