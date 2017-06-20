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
      'ООО', 'ЗАО', 'ООО Компания', 'ОАО', 'ОАО', 'ПАО', 'МКК', 'МФО'
    );

    protected static $companyNameSuffixes = array(
      'Маш', 'Наладка', 'Экспедиция', 'Пром', 'Комплекс', 'Машина', 'Снос', '-М', 'Лизинг', 'Траст', 'Снаб',
      '-H', 'Трест', 'Банк', 'Опт', 'Проф', 'Сбыт', 'Центр'
    );
    /**
     * @note Words and parts of words that usually used in company names
     */
    protected static $companyElements = array(
        'ЖелДор', 'Гараж', 'Цемент', 'Асбоцемент', 'Строй', 'Лифт', 'Креп', 'Авто', 'Теле', 'Транс', 'Алмаз', 'Метиз',
        'Мотор', 'Рос', 'Тяж', 'Тех', 'Сантех', 'Урал', 'Башкир', 'Тверь', 'Казань', 'Обл', 'Бух', 'Хоз', 'Электро',
        'Текстиль', 'Восток', 'Орион', 'Юпитер', 'Финанс', 'Микро', 'Радио', 'Мобайл', 'Дизайн', 'Метал', 'Нефть',
        'Телеком', 'Инфо', 'Сервис', 'Софт', 'IT', 'Рыб', 'Глав', 'Вектор', 'Рем', 'Гор', 'Газ', 'Монтаж', 'Мор',
        'Реч', 'Флот', 'Cиб', 'Каз', 'Инж', 'Вод', 'Пив', 'Хмель', 'Мяс', 'Томск', 'Омск', 'Север', 'Лен'
    );

    /**
     * @link https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D1%82%D0%B5%D0%B3%D0%BE%D1%80%D0%B8%D1%8F:%D0%9F%D1%80%D0%BE%D1%84%D0%B5%D1%81%D1%81%D0%B8%D0%B8
     * @note Randomly took from this list - some jobs titles for each letter
     */
    protected static $jobTitleFormat = array(
      'Абразивоструйщик', 'Автоинструктор', 'Администратор', 'Арт-директор', 'Архивист', 'Бариста', 'Бармен',
      'Бестиарий (гладиатор)', 'Бизнес-аналитик', 'Бухгалтер', 'Ветеринар', 'Водитель', 'Водолаз', 'Геймдизайнер',
      'Герольд', 'Гитарный мастер', 'Горный проводник', 'Детектив', 'Диджей', 'Диктор', 'Дипломат', 'Егерь', 'Жокей',
      'Зубной техник', 'Интеллектуал', 'Информационный работник', 'Кассир', 'Ковбой', 'Креативный директор', 'Критик',
      'Крупье', 'Лесоруб', 'Лингвист', 'Машинист', 'Менеджер', 'Музыкант', 'Научный сотрудник', 'Офис-менеджер',
      'Печник', 'Пианист', 'Писатель', 'Продюсер', 'Промоутер', 'Психолог', 'Радист', 'Редактор', 'Садовник',
      'Системный аналитик', 'Стилист', 'Столяр', 'Сторож', 'Телефонистка', 'Телохранитель', 'Технический писатель',
      'Учёный', 'Физик', 'Финансовый советник', 'Фотограф', 'Фрезеровщик', 'Художник', 'Чабан', 'Штурман',
      'Экономист', 'Электромонтёр'
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
