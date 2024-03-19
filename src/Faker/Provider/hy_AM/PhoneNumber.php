<?php

namespace Faker\Provider\hy_AM;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static array $codes = [91, 96, 99, 43, 77, 93, 94, 98, 97, 77, 55, 95, 41, 49];

    protected static array $numberFormats = [
        '######',
        '##-##-##',
        '###-###',
    ];

    protected static array $formats = [
        '0{{code}} {{numberFormat}}',
        '(0{{code}}) {{numberFormat}}',
        '+374{{code}} {{numberFormat}}',
        '+374 {{code}} {{numberFormat}}',
    ];

    public function phoneNumber(): string
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$formats)));
    }

    public function code(): string
    {
        return static::randomElement(static::$codes);
    }

    public function numberFormat(): string
    {
        return static::randomElement(static::$numberFormats);
    }
}
