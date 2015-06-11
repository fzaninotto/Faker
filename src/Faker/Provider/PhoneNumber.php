<?php

namespace Faker\Provider;

use Faker\Calculator\Luhn;

class PhoneNumber extends Base
{
    protected static $formats = array('###-###-###');

    /**
     * @example '555-123-546'
     */
    public static function phoneNumber()
    {
        return static::numerify(static::randomElement(static::$formats));
    }

    /**
     * International Mobile Equipment Identity (IMEI)
     *
     * @link http://en.wikipedia.org/wiki/International_Mobile_Station_Equipment_Identity
     * @link http://imei-number.com/imei-validation-check/
     * @example '720084494799532'
     * @return int $imei
     */
    public function imei()
    {
        $imei = (string) static::numerify('##############');
        $imei .= Luhn::computeCheckDigit($imei);
        return $imei;
    }
}
