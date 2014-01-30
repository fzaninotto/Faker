<?php

namespace Faker\Provider\bn_BD;

use Faker\Provider\bn_BD\Utils;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    public static function phoneNumber()
    {
        $number = "+880";
        $number .= static::randomNumber(7);

        return Utils::getBanglaNumber($number);
    }

}
