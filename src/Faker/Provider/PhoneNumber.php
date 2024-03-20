<?php

namespace Faker\Provider;

use Faker\Calculator\Luhn;

class PhoneNumber extends Base
{
    protected static array $formats = ['###-###-###'];

    /**
     * @example '555-123-546'
     */
    public function phoneNumber(): string
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$formats)));
    }

    /**
     * @example +27113456789
     */
    public function e164PhoneNumber(): string
    {
        $formats = ['+%############'];

        return static::numerify($this->generator->parse(static::randomElement($formats)));
    }

    /**
     * International Mobile Equipment Identity (IMEI).
     *
     * @see http://en.wikipedia.org/wiki/International_Mobile_Station_Equipment_Identity
     * @see http://imei-number.com/imei-validation-check/
     *
     * @example '720084494799532'
     */
    public function imei(): int
    {
        $imei = static::numerify('##############');
        $imei .= Luhn::computeCheckDigit($imei);

        return $imei;
    }
}
