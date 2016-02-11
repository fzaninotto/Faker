<?php

namespace Faker\Provider\th_TH;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @see http://www4.sit.kmutt.ac.th/content/%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%82%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%AB%E0%B8%A1%E0%B8%B2%E0%B8%A2%E0%B9%80%E0%B8%A5%E0%B8%82%E0%B9%82%E0%B8%97%E0%B8%A3%E0%B8%A8%E0%B8%B1%E0%B8%9E%E0%B8%97%E0%B9%8C%E0%B9%83%E0%B8%AB%E0%B9%89%E0%B8%96%E0%B8%B9%E0%B8%81%E0%B8%95%E0%B9%89%E0%B8%AD%E0%B8%87
     */
    protected static $formats = array(
        '0 #### ####',
        '+66 #### ####',
        '0########',
    );

    /**
     * An array of th_TH mobile (cell) phone number formats
     * @var array
     */
    protected static $mobileFormats = array(
      '08# ### ####',
      '08 #### ####',
      '09# ### ####',
      '09 #### ####',
    );

    /**
     * Return a th_TH mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
