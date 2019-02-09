<?php

namespace Faker\Provider\de_DE;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+49(0)##########',
        '+49(0)#### ######',
        '+49 (0) #### ######',
        '+49(0) #########',
        '+49(0)#### #####',
        '0##########',
        '0#########',
        '0#### ######',
        '0#### #####',
        '(0####) ######',
        '(0####) #####',
    );

    /**
     * An array of de_DE mobile (cell) phone number formats
     * @var array
     */
    protected static $mobileFormats = array(
      // Local
      '0151#######', '0152#######', '0157#######', '0159#######',
      '0160#######', '0162#######', '0163#######',
      '0170#######', '0171#######', '0172#######',
      '0173#######', '0174#######', '0175#######',
      '0176#######', '0177#######', '0178#######',
      '0179#######',
      '0151 #######', '0152 #######', '0157 #######', '0159 #######',
      '0160 #######', '0162 #######', '0163 #######',
      '0170 #######', '0171 #######', '0172 #######',
      '0173 #######', '0174 #######', '0175 #######',
      '0176 #######', '0177 #######', '0178 #######',
      '0179 #######',
    );

    /**
     * Return a de_DE mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
