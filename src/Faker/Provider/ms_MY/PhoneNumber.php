<?php

namespace Faker\Provider\ms_MY;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{

    /**
     * An array of ms_MY number formats
     * Fixed line telephone numbers consists of an area code of 1 to 2 digits (excluding the leading zero) followed by
     * a 6 to 8-digit subscriber number.
     * @var array
     */
    protected static $formats = array(
        '{{areaCode}} ## ####',
        '{{areaCode}} ### ####',
        '{{areaCode}} #### ####',
        '6{{areaCode}} ## ####',
        '6{{areaCode}} ### ####',
        '6{{areaCode}} #### ####',
    );

    /**
     * An array of ms_MY mobile (cell) phone number formats
     * Mobile phone numbers consists of a mobile phone code of 2 digits followed by a 7 to 8-digit subscriber number.
     * @var array
     */
    protected static $mobileFormats = array(
        '{{mobileOperatorCode}} ### ####',
        '{{mobileOperatorCode}} #### ####',
        '6{{mobileOperatorCode}} ### ####',
        '6{{mobileOperatorCode}} #### ####',
    );

    /**
     * An array of ms_MY Fixed line area codes
     * @var array
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Malaysia#Geographic_area_codes
     */
    protected static $areaCodes = array(
        '03', '04', '06', '07', '082', '083', '084', '085', '086', '087', '088', '089', '09'
    );

    /**
     * An array of ms_MY mobile codes
     * @var array
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Malaysia#Mobile_phone_codes_and_IP_telephony
     */
    protected static $mobileCodes = array(
        '010', '011', '012', '013', '014', '015', '016', '017', '018', '019', '020',
    );

    /**
     * Return a ms_MY mobile phone number
     * @return string
     */
    public function mobileNumber()
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$mobileFormats)));
    }


    /**
     * Return a ms_MY fixed line area code
     * @return string
     */
    public static function areaCode()
    {
        return static::numerify(static::randomElement(static::$areaCodes));
    }

    /**
     * Return a ms_MY mobile code
     * @return string
     */
    public static function mobileOperatorCode()
    {
        return static::numerify(static::randomElement(static::$mobileCodes));
    }
}
