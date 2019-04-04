<?php

namespace Faker\Provider\nb_NO;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
    * @var array Norwegian land line phone number formats
    */
    protected static $formats = array(
        '+47#########',
        '+47 ## ## ## ##',
        '## ## ## ##',
        '## ## ## ##',
        '########',
        '########'
    );

    /**
     * An array of nb_NO mobile phone number formats
     * @var array
     */
    protected static $mobileFormats = array(
        // Local
        '9## ## ###',
        '4## ## ###',
        '9#######',
        '4#######',
        // International
        '+479#######',
        '+47 9## ## ###',
        '+474#######',
        '+47 4## ## ###'
    );

    /**
     * Return a nb_NO mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
