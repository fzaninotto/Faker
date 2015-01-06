<?php

namespace Faker\Provider\en_IE;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $phonePrefix = array(
        '1',
        '21', '22', '23', '24', '25', '26', '27', '28', '29',
        '41', '42', '43', '44', '45', '46', '47', '49', '402', '404',
        '51', '52', '53', '56', '57', '58', '59', '504', '505',
        '61', '62', '63', '64', '65', '66', '67', '68', '69',
        '71', '74',
        '90', '91', '93', '94', '95', '96', '97', '98', '99'
    );

    protected static $mobilePrefix = array(
        '83', '85', '86', '87', '89'
    );

    protected static $phoneFormats = array(
        '+353 ({{phonePrefix}}) ### ####',
        '(0{{phonePrefix}}) ### ####'
        '+353 ({{mobilePrefix}}) ### ####',
        '(0{{mobilePrefix}}) ### ####'
    );

    /**
     * @example '56'
     */
    public static function phonePrefix()
    {
        return static::randomElement(static::$phonePrefix);
    }

    /**
     * @example '87'
     */
    public static function mobilePrefix()
    {
        return static::randomElement(static::$mobilePrefix);
    }
}
