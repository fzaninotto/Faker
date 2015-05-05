<?php

namespace Faker\Provider\kk_KZ;

class Company extends \Faker\Provider\Company
{
    protected static $companyNameFormats = array(
        '{{companyPrefix}} {{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}{{companyNameSuffix}}',
    );

    protected static $companyPrefixes = array(
        'АҚ', 'ЖШС', 'ЖАҚ'
    );

    protected static $companyNameSuffixes = array(
        'Құрылыс', 'Машина', 'Бұзу', '-М', 'Лизинг', 'Страх', 'Ком', 'Телеком'
    );

    protected static $companyElements = array(
        'Қазақ', 'Кітап', 'Цемент', 'Лифт', 'Креп', 'Авто', 'Теле', 'Транс', 'Алмаз', 'Метиз',
        'Мотор', 'Қаз', 'Тех', 'Сантех', 'Алматы', 'Астана', 'Электро',
    );

    /**
     * @example 'ЖШС АлматыТелеком'
     */
    public function company()
    {
        $format = static::randomElement(static::$companyNameFormats);

        return $this->generator->parse($format);
    }

    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefixes);
    }

    public static function companyNameElement()
    {
        return static::randomElement(static::$companyElements);
    }

    public static function companyNameSuffix()
    {
        return static::randomElement(static::$companyNameSuffixes);
    }
}
