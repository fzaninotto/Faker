<?php

namespace Faker\Provider\ru_RU;

class Company extends \Faker\Provider\Company
{

    protected static $format = '{{companyPrefix}} {{companyName}}';

    protected static $companyPrefix = array('ООО', 'ЗАО', 'ООО Компания', 'ОАО', 'ОАО');

    protected static $companySuffix = array(
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
        $format = static::randomElement(static::$formats);

        return $this->generator->parse($format);
    }

    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    /**
     * @example 'СтройГазМонтаж'
     */
    public static function companyName()
    {
        $result = '';

        for ($i=0; $i < mt_rand(1, 4); $i++) {
            $result .= static::randomElement(static::$companyElements);
        }

        return $result . static::randomElement(static::$companySuffix);
    }
}
