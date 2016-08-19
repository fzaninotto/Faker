<?php

namespace Faker\Provider\bs_BA;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+387 {{areaCode}} ### ###',
        '+387({{areaCode}})###-###',
        '0{{areaCode}} ### ###',
        '0{{areaCode}}-###-###'
    );

    /**
     * Bosnian Area Codes
     *
     * @see https://bs.wikipedia.org/wiki/Spisak_pozivnih_brojeva_u_Bosni_i_Hercegovini
     *
     * @return string
     */
    public static function areaCode()
    {
        $digits = [30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67];

        return $digits[array_rand($digits)];
    }
}
