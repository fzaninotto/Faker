<?php

namespace Faker\Provider\en_IN;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @see https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers#United_States.2C_Canada.2C_and_other_NANP_countries
     */
    protected static $formats = array(
        // International format
        '00 91 0{{areaCode}} #######',
        '00 91 {{areaCode}} #######',
        '0091{{areaCode}}#######',

        // Standard formats
        '{{areaCode}}#######',
        '({{areaCode}}) #######',
        '(0{{areaCode}}) #######',

        // Mobile Phone
        '+91 ##########',
        '+91 ##########',
        '+91 ##########',
        '+91 ##########',
        '+91 ##########',
        '+91 ##########',
    );

    /**
     * @see https://en.wikipedia.org/wiki/Toll-free_telephone_number#United_States
     */
    protected static $tollFreeAreaCodes = array();
    protected static $tollFreeFormats = array(
        '1-800-##########',
    );

    public function tollFreeAreaCode()
    {
        return self::randomElement(static::$tollFreeAreaCodes);
    }

    public function tollFreePhoneNumber()
    {
        $format = self::randomElement(static::$tollFreeFormats);

        return self::numerify($this->generator->parse($format));
    }

    /**
    * Land Line number mostly in rural areas
    */
    protected static $landLinePhoneFormat = array(
        '{{areaCode}}{{landLinePhone}}',
        '{{areaCode}} {{landLinePhone}}',
        '{{areaCode}}-{{landLinePhone}}',
    );

    public function landLinePhoneNumber(){
        $format = self::randomElement(static::$landLinePhoneFormat);

        return self::numerify($this->generator->parse($format));
    }

    public function landLinePhone(){
        $digits[] = self::numberBetween(1, 9);
        $digits[] = self::randomDigit();
        $digits[] = self::randomDigit();
        $digits[] = self::randomDigit();
        $digits[] = self::randomDigit();
        $digits[] = self::randomDigit();
        $digits[] = self::randomDigit();

        return join('', $digits);
    }

    /**
     * Area/City code
     * @return string
     */
    public static function areaCode()
    {
        $digit = self::randomDigit();
        // For generating 022(Metro) as well as 0724(Non Metro) area code
        if($digit == 0)
            $digit = '';

        $digits[] = self::numberBetween(0, 9);
        $digits[] = self::randomDigit();
        $digits[] = self::numberBetween(0, 9);

        return '0'.$digit.join('', $digits);
    }

    /**
     * NXX-format central office exchange code
     *
     * @see https://en.wikipedia.org/wiki/North_American_Numbering_Plan#Numbering_system
     *
     * @return string
     */
    public static function exchangeCode()
    {
        $digits[] = self::numberBetween(2, 9);
        $digits[] = self::randomDigit();

        if ($digits[1] === 1) {
            $digits[] = self::randomDigitNot(1);
        } else {
            $digits[] = self::randomDigit();
        }

        return join('', $digits);
    }
}
