<?php

namespace Faker\Provider\bnBD;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    public static function phoneNumber()
    {
        $number = "+880";
        $number .= static::randomNumber(7);

        return Utils::getBanglaNumber($number);
    }
}
