<?php

namespace Faker\Provider\en_GB;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
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
    );

    /**
     * An array of en_GB mobile (cell) phone number formats
     * @var array
     */
    protected static $mobileFormats = array(
        // Local
        '07#########',
        '07### ######',
        '07### ### ###'
    );

    /**
     * An array of en_GB landline phone number formats
     *
     * @var array
     */
    protected static $landlineFormats = array(
        '0333 #### ###',
        '02### ### ###',
        '01### ######',
    );



    /**
     * Return a en_GB mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }


    /**
     * Return a en_GB landline phone number
     *
     * @return string
     */
    public static function landlineNumber()
    {
        return static::numerify(static::randomElement(static::$landlineFormats));
    }
}
