<?php

namespace Faker\Provider\en_ZA;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '0({{areaCode}})#######',
        '0{{areaCode}}#######',
        '0{{areaCode}} ### ####',
        '0{{areaCode}}-###-####',
    );

    protected static $cellphoneFormats = array(
        '0{{cellphoneCode}}#######',
        '0{{cellphoneCode}} ### ####',
        '0{{cellphoneCode}}-###-####',
    );

    protected static $specialFormats = array(
        '{{specialCode}}#######',
        '{{specialCode}} ### ####',
        '{{specialCode}}-###-####',
        '({{specialCode}})###-####',
    );

    protected static $tollFreeAreaCodes = array(
        '0800',
        '0860',
        '0861',
        '0862',
    );

    /**
     * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_South_Africa
     */
    public static function areaCode()
    {
        $digits[] = self::numberBetween(1, 5);
        switch ($digits[0]) {
            case 1:
                $digits[] = self::numberBetween(1, 8);
                break;
            case 2:
                $number = self::numberBetween(1, 8);
                $digits[] = in_array($number, array(5, 6)) ? $number + 2 : $number;
                break;
            case 3:
                $number = self::numberBetween(1, 8);
                $digits[] = in_array($number, array(7, 8)) ? $number - 2 : $number;
                break;
            case 4:
                $digits[] = self::numberBetween(1, 9);
                break;
            case 5:
                $number = self::numberBetween(1, 8);
                $digits[] = in_array($number, array(2, 5)) ? $number + 2 : $number;
                break;
        }

        return implode('', $digits);
    }

    /**
     * @param bool $formatted
     * @param bool $international
     *
     * @return string
     */
    public function phoneNumber($formatted = true, $international = false)
    {
        $format = static::randomElement(static::$formats);

        $number = self::numerify($this->generator->parse($format));

        if (!$formatted) {
            $number = trim(str_replace(array('(', ')', '-', ' '), '', $number));
        }

        if ($international) {
            $number = preg_replace('/(^[0])/', '+27', $number);
        }

        return $number;
    }

    /**
     * @return string
     */
    public static function cellphoneCode()
    {
        $digits[] = self::numberBetween(6, 8);
        switch ($digits[0]) {
            case 6:
                $digits[] = self::numberBetween(0, 2);
                break;
            case 7:
                $number = self::numberBetween(1, 9);
                $digits[] = in_array($number, array(5, 7)) ? $number + 1 : $number;
                break;
            case 8:
                $digits[] = self::numberBetween(1, 9);
                break;
        }

        return implode('', $digits);
    }

    /**
     * @return string
     */
    public static function specialCode()
    {
        return static::randomElement(static::$tollFreeAreaCodes);
    }

    /**
     * @param bool $formatted
     * @param bool $international
     *
     * @return string
     */
    public function mobileNumber($formatted = true, $international = false)
    {
        $format = static::randomElement(static::$cellphoneFormats);

        $number = self::numerify($this->generator->parse($format));

        if (!$formatted) {
            $number = trim(str_replace(array('(', ')', '-', ' '), '', $number));
        }

        if ($international) {
            $number = preg_replace('/(^[0])/', '+27', $number);
        }

        return $number;
    }

    /**
     * @param bool $formatted
     *
     * @return string
     */
    public function tollFreeNumber($formatted = true)
    {
        $format = static::randomElement(static::$specialFormats);

        $number = self::numerify($this->generator->parse($format));

        if (!$formatted) {
            $number = trim(str_replace(array('(', ')', '-', ' '), '', $number));
        }

        return $number;
    }
}
