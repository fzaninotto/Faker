<?php

namespace Faker\Provider\hy_AM;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{

    protected static $codes = array(91, 96, 99, 43, 77, 93, 94, 98, 97, 77, 55, 95, 41, 49);

    protected static $numberFormats = array(
        '######',
        '##-##-##',
        '###-###',
    );

    protected static $formats = array(
        '0{code} {numberFormat}',
        '(0{code}) {numberFormat}',
        '+374{code} {numberFormat}',
        '+374 {code} {numberFormat}',
    );

    public function phoneNumber()
    {
        $format = static::randomElement(static::$formats);
        $code = static::randomElement(static::$codes);
        $numberFormat = static::randomElement(static::$numberFormats);

        $number = str_replace(array('{code}', '{numberFormat}'), array($code, $numberFormat), $format);

        return static::numerify($this->generator->parse($number));
    }
}
