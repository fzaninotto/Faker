<?php

namespace Faker\Provider\kk_KZ;

class Address extends \Faker\Provider\Address
{
    protected static array $citySuffix = ['қаласы'];

    protected static array $regionSuffix = ['облысы'];
    protected static array $streetSuffix = [
        'көшесі',
        'даңғылы',
    ];

    protected static array $buildingNumber = ['###'];
    protected static array $postcode = ['0#####'];
    // TODO list all country names in the world
    protected static array $country = [
        'Қазақстан',
        'Ресей',
    ];

    protected static array $region = [
        'Алматы',
        'Ақтау',
        'Ақтөбе',
        'Астана',
        'Атырау',
        'Байқоңыр',
        'Қарағанды',
        'Көкшетау',
        'Қостанай',
        'Қызылорда',
        'Маңғыстау',
        'Павлодар',
        'Петропавл',
        'Талдықорған',
        'Тараз',
        'Орал',
        'Өскемен',
        'Шымкент',
    ];

    protected static array $city = [
        'Алматы',
        'Ақтау',
        'Ақтөбе',
        'Астана',
        'Атырау',
        'Байқоңыр',
        'Қарағанды',
        'Көкшетау',
        'Қостанай',
        'Қызылорда',
        'Маңғыстау',
        'Павлодар',
        'Петропавл',
        'Талдықорған',
        'Тараз',
        'Орал',
        'Өскемен',
        'Шымкент',
    ];

    protected static array $street = [
        'Абай',
        'Гоголь',
        'Кенесары',
        'Бейбітшілік',
        'Достық',
        'Бұқар жырау',
    ];

    protected static array $addressFormats = [
        '{{postcode}}, {{region}} {{regionSuffix}}, {{city}} {{citySuffix}}, {{street}} {{streetSuffix}}, {{buildingNumber}}',
    ];

    protected static array $streetAddressFormats = [
        '{{street}} {{streetSuffix}}, {{buildingNumber}}',
    ];

    public static function buildingNumber(): string
    {
        return static::numerify(static::randomElement(static::$buildingNumber));
    }

    public static function regionSuffix()
    {
        return static::randomElement(static::$regionSuffix);
    }

    public static function region()
    {
        return static::randomElement(static::$region);
    }

    public function city(): string
    {
        return static::randomElement(static::$city);
    }

    public static function street()
    {
        return static::randomElement(static::$street);
    }
}
