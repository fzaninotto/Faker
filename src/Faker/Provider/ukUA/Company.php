<?php

namespace Faker\Provider\uk_UA;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companyName}}',                                      // Вектор
        '{{companyPrefix}} "{{companyName}}"',                  // ТОВ "Інфоком"
        '{{companyName}}-{{companySuffix}}',                    // Сервіс-Плюс
        '{{companyPrefix}} "{{companyName}}-{{companySuffix}}"',// ПАТ "Альфа-Стиль"
    );

    protected static $urlFormats = array(
        '{{companyName}}',
        '{{companyName}}-{{companySuffix}}',
    );

    protected static $companyPrefix = array('ТОВ', 'ПП', 'ПАТ','ПрАТ');
    protected static $companySuffix = array('Сервіс','Плюс', 'Груп', 'Стиль', 'Дизайн');

    protected static $companyName = array(
        'Вектор', 'Едельвейс', 'Смарт', 'Альфа', 'Система', 'Універсал',
        'Інфоком', 'Макс', 'Планета', 'Вектор', 'Приват', 'Еко', 'Мега',
        'Мегамакс', 'Мульти', 'Майнер'
    );

    public function companyUrl()
    {
        $format = static::randomElement(static::$urlFormats);

        return $this->generator->parse($format);
    }

    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    public static function companyName()
    {
        return static::randomElement(static::$companyName);
    }
}
