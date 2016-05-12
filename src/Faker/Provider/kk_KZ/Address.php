<?php

namespace Faker\Provider\kk_KZ;

class Address extends \Faker\Provider\Address
{
    protected static $citySuffix = array('қаласы');

    protected static $regionSuffix = array('облысы');
    protected static $streetSuffix = array(
        'көшесі', 'даңғылы',
    );

    protected static $buildingNumber = array('###');
    protected static $postcode = array('0#####');
    // TODO list all country names in the world
    protected static $country = array(
        'Қазақстан',
        'Ресей',
    );

    protected static $region = array(
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
    );

    protected static $city = array(
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
    );

    protected static $street = array(
        'Абай',
        'Гоголь',
        'Кенесары',
        'Бейбітшілік',
        'Достық',
        'Бұқар жырау',
    );

    protected static $addressFormats = array(
        "{{postcode}}, {{region}} {{regionSuffix}}, {{city}} {{citySuffix}}, {{street}} {{streetSuffix}}, {{buildingNumber}}",
    );

    protected static $streetAddressFormats = array(
        "{{street}} {{streetSuffix}}, {{buildingNumber}}"
    );

    public static function buildingNumber()
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

    public function city()
    {
        return static::randomElement(static::$city);
    }

    public static function street()
    {
        return static::randomElement(static::$street);
    }
}
