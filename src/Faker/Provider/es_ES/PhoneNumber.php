<?php

namespace Faker\Provider\es_ES;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static array $formats = [
        '+34 9## ## ####',
        '+34 9## ######',
        '+34 9########',
        '+34 9##-##-####',
        '+34 9##-######',
        '9## ## ####',
        '9## ######',
        '9########',
        '9##-##-####',
        '9##-######',
    ];

    protected static array $mobileFormats = [
        '+34 6## ## ####',
        '+34 6## ######',
        '+34 6########',
        '+34 6##-##-####',
        '+34 6##-######',
        '6## ## ####',
        '6## ######',
        '6########',
        '6##-##-####',
        '6##-######',
    ];

    protected static array $tollFreeFormats = [
        '900 ### ###',
        '800 ### ###',
    ];

    public static function mobileNumber(): string
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }

    public static function tollFreeNumber(): string
    {
        return static::numerify(static::randomElement(static::$tollFreeFormats));
    }
}
