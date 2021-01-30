<?php

namespace Faker\Provider\vi_VN;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $areaCodes = array(
        76, 281, 64, 781, 240, 241,
        75, 650, 56, 651, 62, 780,
        26, 710, 511, 500, 510, 230,
        61, 67, 59, 219, 351, 4,
        39, 320, 31, 711, 218, 321,
        8, 58, 77, 60, 231, 25,
        20, 63, 72, 350, 38, 30,
        68, 210, 57, 52, 510, 55,
        33, 53, 79, 22, 66, 36,
        280, 37, 54, 73, 74, 27,
        70, 211, 29,
        // Mobile
        96, 97, 98, 32, 33, 34, 35, 36, 37, 38, 39, // Viettel
        91, 94, 83, 84, 85, 87, 89, // Vinaphone
        90, 93, 70, 71, 72, 76, 78, // Mobifone
        92, 56, 58, // Vietnamobile
        99, 59, // Gmobile
        95, // Sfone
    );

    protected static $formats = array(
        '7' => array(
            '0[a] ### ####',
            '(0[a]) ### ####',
            '0[a]-###-####',
            '(0[a])###-####',
            '84-[a]-###-####',
            '(84)([a])###-####',
            '+84-[a]-###-####',
        ),
        '8' => array(
            '0[a] #### ####',
            '(0[a]) #### ####',
            '0[a]-####-####',
            '(0[a])####-####',
            '84-[a]-####-####',
            '(84)([a])####-####',
            '+84-[a]-####-####',
        ),
    );

    public function phoneNumber()
    {
        $areaCode = static::randomElement(static::$areaCodes);
        $areaCodeLength = strlen($areaCode);
        $digits = 7;

        if ($areaCodeLength < 2) {
            $digits = 8;
        }

        return static::numerify(str_replace('[a]', $areaCode, static::randomElement(static::$formats[$digits])));
    }
}
