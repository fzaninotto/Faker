<?php

namespace Faker\Provider\kk_KZ;

class Payment extends \Faker\Provider\Payment
{

    protected static $banks = array(
        'Қазкоммерцбанк',
        'Халық Банкі',
    );

    /**
     * @example 'Қазкоммерцбанк'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }
}
