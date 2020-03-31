<?php

namespace Faker\Provider\fr_CD;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $mobileFormats = array(
        '+243 (0)## ### ## ##',
        '+243(0)#########',
        '+243 ## ### ## ##',
        '0#########',
        '+243#########',
        '0## ### ## ##',
    );

    protected static $prefixs = array('99', '97', '98', '81', '82', '85', '84', '89', '90', '91');

    /**
     * return a Congolese phone number
     *
     * @return string
     */
    public static function mobileNumber()
    {
        $prefix = static::randomElement(static::$prefixs);
        $code = static::randomElement(array('+243', '0', '00243'));
        $format = static::numerify(static::randomElement(array('#######', ' ## ### ##', ' ### ## ##', '## ## ###')));
        return $code.$prefix.$format;
    }
}
