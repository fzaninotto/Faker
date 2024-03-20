<?php

namespace Faker\Provider\ja_JP;

class Company extends \Faker\Provider\Company
{
    protected static array $formats = [
        '{{companyPrefix}} {{lastName}}',
    ];

    protected static array $companyPrefix = ['株式会社', '有限会社'];

    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }
}
