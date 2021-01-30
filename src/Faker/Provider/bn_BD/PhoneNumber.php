<?php

namespace Faker\Provider\bn_BD;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    public function phoneNumber()
    {
        $number = "+880";
        $number .= static::randomNumber(8);

        return Utils::getBanglaNumber($number);
    }
}
