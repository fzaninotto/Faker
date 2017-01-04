<?php

namespace Faker\Provider\pt_BR;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{

    protected static $landlineFormats = array('2###-####', '3###-####');

    protected static $cellphoneFormats = array('9####-####');

    /**
     * Generates a 2-digit area code not composed by zeroes.
     * @return string
     */
    public static function areaCode()
    {
        return static::randomDigitNotNull().static::randomDigitNotNull();
    }

    /**
     * Generates a 9-digit cellphone number without formatting characters.
     * @param bool $formatted [def: true] If it should return a formatted number or not.
     * @return string
     */
    public static function cellphone($formatted = true)
    {
        $number = static::numerify(static::randomElement(static::$cellphoneFormats));

        if (!$formatted) {
            $number = strtr($number, array('-' => ''));
        }

        return $number;
    }

    /**
     * Generates an 9-digit landline number without formatting characters.
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
            static::cellphone($formatted) :
            static::landline($formatted);

        return $formatted? "($area) $number" : $area.$number;
    }

    /**
     * Concatenates {@link areaCode} and {@link cellphone} into a national cellphone number.
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
    public function phoneNumber()
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
