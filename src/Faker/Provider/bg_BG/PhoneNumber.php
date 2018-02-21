<?php

namespace Faker\Provider\bg_BG;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+3592#####',
        '+3592######',
        '+3592#######',
        '+3593######',
        '+3593#######',
        '+3596######',
        '+3596#######',
        '02#####',
        '02 ######',
        '02#######',
        '03######',
        '03#######',
        '06######',
        '06#######',
    );

    /**
     * An array of bg_BG mobile (cell) phone number formats
     * @var array
     */
    protected static $mobileFormats = array(
        '+359(0)87#######',
        '+359(0)88#######',
        '+359(0)999 ######',
        '+359(0)996 ### ###',
        '+35987#######',
        '+35988#######',
        '+359996######',
        '+35998#######',
        '088# ######',
        '089# ######',
        '087# ### ###',
        '0996 ### ###',
    );


    /**
     * Return a bg_BG mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
