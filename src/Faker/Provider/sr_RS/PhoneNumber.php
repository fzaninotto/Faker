<?php

namespace Faker\Provider\sr_RS;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        // International format
        '+381-{{areaCodeWithoutZero}}-###-####',
        '(+381)-({{areaCodeWithoutZero}})-###-####',
        '+381{{areaCodeWithoutZero}}#######',

        // Standard formats
        '{{areaCode}} ### ####',
        '{{areaCode}}-###-####',
        '{{areaCode}}/###-####',
        '{{areaCode}}#######',
    );
    
    public static function areaCode($withoutZero = false)
    {
        if (!$withoutZero) {
            $digits[] = 0;
        }
        
        $digits[] = self::numberBetween(10, 50);

        return join('', $digits);
    }
    
    public static function areaCodeWithoutZero()
    {
        return self::areaCode(true);
    }
}
