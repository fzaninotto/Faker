<?php

namespace Faker\Provider\en_AU;

/**
 * Class Address
 * @see http://www.ipaustralia.gov.au/about-us/corporate/address-standards/
 * @package Faker\Provider\en_AU
 */
class ABN extends \Faker\Provider\en_US\ABN
{
    protected static $format = array(
        '## ### ### ###',
    );

    /**
     * Return an ABN number
     * @example 17 482 904 524
     */
    public static function abn()
    {
        return static::numerify(static::randomDigit(static::$format));
    }
}
