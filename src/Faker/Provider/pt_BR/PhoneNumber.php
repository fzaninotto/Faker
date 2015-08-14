<?php

namespace Faker\Provider\pt_BR;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{

    protected static $landlineFormats = array('2###-####', '3###-####');

    protected static $cellphoneFormats = array('7###-####', '8###-####', '9###-####');

    /**
     * Extracted from http://portal.embratel.com.br/embratel/9-digito/ (point 11)
     */
    protected static $ninthDigitAreaCodes = array(
        11, 12, 13, 14, 15, 16, 17, 18, 19,
        21, 22, 24, 27, 28,
        91, 92, 93, 94, 95, 96, 97, 98, 99,
        //31, 32, 33, 34, 35, 37, 38, 71, 73, 74, 75, 77, 79, 81, 82, 83, 84, 85, 86, 87, 88, 89, //by dec/2015
        //41, 42, 43, 44, 45, 46, 47, 48, 49, 51, 53, 54, 55, 61,62, 63, 64, 65, 66, 67, 68, 69 //by dec/2016
    );

    /**
     * Generates a 2-digit area code not composed by zeroes.
     * @return string
     */
    public static function areaCode()
    {
        return static::randomDigitNotNull().static::randomDigitNotNull();
    }

    /**
     * Generates a 8/9-digit cellphone number without formatting characters.
     * @param bool $formatted [def: true] If it should return a formatted number or not.
     * @param bool $ninth     [def: false] If the number should have a nine in the beginning or not.
     *                        If the generated number begins with 7 this is ignored.
     * @return string
     */
    public static function cellphone($formatted = true, $ninth = false)
    {
        $number = static::numerify(static::randomElement(static::$cellphoneFormats));

        if ($ninth && $number[0] != 7) {
            $number = "9$number";
        }

        if (!$formatted) {
            $number = strtr($number, array('-' => ''));
        }

        return $number;
    }

    /**
     * Generates an 8-digit landline number without formatting characters.
     * @param bool $formatted [def: true] If it should return a formatted number or not.
     * @return string
     */
    public static function landline($formatted = true)
    {
        $number = static::numerify(static::randomElement(static::$landlineFormats));

        if (!$formatted) {
            $number = strtr($number, array('-' => ''));
        }

        return $number;
    }

    /**
     * Randomizes between cellphone and landline numbers.
     * @param bool $formatted [def: true] If it should return a formatted number or not.
     * @return mixed
     */
    public static function phone($formatted = true)
    {
        $options = static::randomElement(array(
            array('cellphone', false),
            array('cellphone', true),
            array('landline', null),
        ));

        return call_user_func("static::{$options[0]}", $formatted, $options[1]);
    }

    /**
     * Generates a complete phone number.
     * @param string $type      [def: landline] One of "landline" or "cellphone". Defaults to "landline" on invalid values.
     * @param bool   $formatted [def: true] If the number should be formatted or not.
     * @return string
     */
    protected static function anyPhoneNumber($type, $formatted = true)
    {
        $area   = static::areaCode();
        $number = ($type == 'cellphone')?
            static::cellphone($formatted, in_array($area, static::$ninthDigitAreaCodes)) :
            static::landline($formatted);

        return $formatted? "($area) $number" : $area.$number;
    }

    /**
     * Concatenates {@link areaCode} and {@link cellphone} into a national cellphone number. The ninth digit is
     * derived from the area code.
     * @param bool $formatted [def: true] If it should return a formatted number or not.
     * @return string
     */
    public static function cellphoneNumber($formatted = true)
    {
        return static::anyPhoneNumber('cellphone', $formatted);
    }

    /**
     * Concatenates {@link areaCode} and {@link landline} into a national landline number.
     * @param bool $formatted [def: true] If it should return a formatted number or not.
     * @return string
     */
    public static function landlineNumber($formatted = true)
    {
        return static::anyPhoneNumber('landline', $formatted);
    }

    /**
     * Randomizes between complete cellphone and landline numbers.
     * @return mixed
     */
    public static function phoneNumber()
    {
        $method = static::randomElement(array('cellphoneNumber', 'landlineNumber'));
        return call_user_func("static::$method", true);
    }

    /**
     * Randomizes between complete cellphone and landline numbers, cleared from formatting symbols.
     * @return mixed
     */
    public static function phoneNumberCleared()
    {
        $method = static::randomElement(array('cellphoneNumber', 'landlineNumber'));
        return call_user_func("static::$method", false);
    }
}
