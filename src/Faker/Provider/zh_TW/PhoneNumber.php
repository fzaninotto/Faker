<?php

namespace Faker\Provider\zh_TW;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $operators = array(
        950,951,952,953,954,955,956,957,958,931,932,933,934,
        935,981,982,983,984,985,911,912,913,914,915,916,917
    );

    protected static $formats = array('###-###');

    public static function phoneNumber()
    {
        $operators = static::randomElement(static::$operators);

        return '0' . $operators . '-' . static::numerify(static::randomElement(static::$formats));
    }
}
