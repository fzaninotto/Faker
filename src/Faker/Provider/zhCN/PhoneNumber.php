<?php

namespace Faker\Provider\zh_CN;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $operators = array(
        134, 135, 136, 137, 138, 139, 147, 150, 151, 152, 157, 158, 159, 182, 187, 188, // china mobile
        130, 131, 132, 145, 155, 156, 185, 186, 145, // china unicom
        133 , 153 , 180 , 181 , 189, // chinatelecom
    );

    protected static $formats = array('######');

    public static function phoneNumber()
    {
        $operators = static::randomElement(static::$operators);

        return $operators . static::numerify(static::randomElement(static::$formats));
    }
}
