<?php

namespace Faker\Provider\ru_RU;

class Company extends \Faker\Provider\Company
{
    protected static $companyNameFormats = array(
        '{{companyPrefix}} {{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}',
        '{{companyPrefix}} {{companyNameElement}}{{companyNameElement}}{{companyNameElement}}{{companyNameSuffix}}',
    );

    protected static $companyPrefixes = array(
        'ООО', 'ЗАО', 'ООО Компания', 'ОАО', 'ОАО'
    );

    protected static $companyNameSuffixes = array(
        'Маш', 'Наладка', 'Экспедиция', 'Пром', 'Комплекс', 'Машина', 'Снос', '-М', 'Лизинг', 'Траст'
    );

    protected static $companyElements = array(
        'ЖелДор', 'Гараж', 'Цемент', 'Асбоцемент', 'Строй', 'Лифт', 'Креп', 'Авто', 'Теле', 'Транс', 'Алмаз', 'Метиз',
        'Мотор', 'Рос', 'Тяж', 'Тех', 'Сантех', 'Урал', 'Башкир', 'Тверь', 'Казань', 'Обл', 'Бух', 'Хоз', 'Электро',
        'Текстиль'
    );

    /**
     * @example 'ООО АсбестЦементМонтаж'
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

    public static function inn($area_code = "")
    {
        if ($area_code === "" || intval($area_code) == 0) {
            //Simple generation code for areas in Russian without check for valid
            $area_code = static::numberBetween(1, 91);
        } else {
            $area_code = intval($area_code);
        }
        $area_code = str_pad($area_code, 2, '0', STR_PAD_LEFT);
        $inn_base =  $area_code . static::numerify('#######');
        return $inn_base . \Faker\Calculator\Inn::checksum($inn_base);
    }

    public static function kpp($inn = "")
    {
        if ($inn == "" || strlen($inn) < 4) {
            $inn = static::inn();
        }
        return substr($inn, 0, 4) . "01001";
    }
}
