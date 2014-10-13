<?php

namespace Faker\Provider\zh_TW;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $operators = array(
        950, 951, 952, 953, 954, 955, 956, 957, 958,
    );

    protected static $formats = array('###-###');

    public static function phoneNumber()
    {
        $operators = static::randomElement(static::$operators);

        return '0' . $operators . '-' . static::numerify(static::randomElement(static::$formats));
    }
}
