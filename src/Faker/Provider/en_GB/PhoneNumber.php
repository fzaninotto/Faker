<?php

namespace Faker\Provider\en_GB;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * An array of en_GB phone number formats
     * @var array
     */
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
     * An array of en_GB safe (reserved for dramatic use) phone number formats
     * @var array
     */
    protected static $safeFormats = array(
        '+44(0)1632######',
        '+44(0)1632 ######',
        '+44(0)1632#####',
        '+44(0)1632 #####',
        '01632######',
        '01632#####',
        '01632 ######',
        '01632 #####',
        '0163 2## ####',
        '0163 2######',
        '(01632) ######',
        '(01632) #####',
        '(0163) 2## ####',
        '(0163) 2######',
    );

    /**
     * An array of en_GB mobile (cell) phone number formats
     * @var array
     */
    protected static $mobileFormats = array(
      '07#########',
      '07### ######',
      '07### ### ###'
    );

    /**
     * An array of en_GB safe (reserved for dramatic use) mobile (cell) phone number formats
     * @var array
     */
    protected static $safeMobileFormats = array(
        '07700900###',
        '07700 900###',
        '07700 900 ###'
    );

    /**
     * Return a en_GB safe phone number
     * @return string
     */
    public static function safePhoneNumber()
    {
        return static::numerify(static::randomElement(static::$safeFormats));
    }

    /**
     * Return a en_GB mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }

    /**
     * Return a en_GB safe mobile phone number
     * @return string
     */
    public static function safeMobileNumber()
    {
        return static::numerify(static::randomElement(static::$safeMobileFormats));
    }
}
