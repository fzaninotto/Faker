<?php

namespace Faker\Provider\bn_BD;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    public function phoneNumber()
    {
        $number = "+880";
        $number .= static::numerify($string = "##########");

        return Utils::getBanglaNumber($number);
    }
}
