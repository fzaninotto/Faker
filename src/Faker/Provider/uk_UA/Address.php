<?php

namespace Faker\Provider\uk_UA;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = array('місто');
    protected static $regionSuffix = array('область');
    protected static $streetPrefix = array(
        'вул.', 'пров.', 'пл.', 'просп.'
    );
    protected static $buildingNumber = array('##');
    protected static $postcode = array('#####');

    /**
     * @see https://uk.wikipedia.org/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_%D0%BA%D1%80%D0%B0%D1%97%D0%BD_%D1%81%D0%B2%D1%96%D1%82%D1%83
     */
    protected static $country = array(
        'Афганістан',
        'Албанія',
        'Алжир',
        'Андорра',
        'Ангола',
        'Аргентина',
        'Вірменія',
        'Австралія',
        'Австрія',
        'Азербайджан',
        'Багамські Острови',
        'Бахрейн',
        'Бангладеш',
        'Барбадос',
        'Білорусь',
        'Бельгія',
        'Беліз',
        'Бенін',
        'Бутан',
        'Болівія',
        'Боснія і Герцеговина',
        'Ботсвана',
        'Бразилія',
        'Бруней',
        'Болгарія',
        'Бурунді',
        'Камбоджа',
        'Камерун',
        'Канада',
        'Кабо-Верде',
        'Центральноафриканська Республіка',
        'Чад',
        'Чилі',
        'Китай',
        'Колумбія',
        'Коморські Острови',
        'Республіка Конго',
        'ДР Конго',
        'Коста-Ріка',
        'Хорватія',
        'Куба',
        'Кіпр',
        'Чеська Республіка',
        'Данія',
        'Джибуті',
        'Домініка',
        'Домініканська Республіка',
        'Східний Тимор',
        'Еквадор',
        'Єгипет',
        'Сальвадор',
        'Екваторіальна Гвінея',
        'Еритрея',
        'Естонія',
        'Ефіопія',
        'Фіджі',
        'Фінляндія',
        'Франція',
        'Габон',
        'Гамбія',
        'Грузія',
        'Німеччина',
        'Гана',
        'Греція',
        'Гренада',
        'Гватемала',
        'Гвінея',
        'Гвінея-Бісау',
        'Гайана',
        'Гаїті',
        'Гондурас',
        'Угорщина',
        'Ісландія',
        'Індія',
        'Індонезія',
        'Іран',
        'Ірак',
        'Ірландія',
        'Ізраїль',
        'Італія',
        'Ямайка',
        'Японія',
        'Йорданія',
        'Казахстан',
        'Кенія',
        'Кірібаті',
        'Північна Корея',
        'Південна Корея',
        'Косово',
        'Кувейт',
        'Киргизстан',
        'Лаос',
        'Латвія',
        'Ліван',
        'Лесото',
        'Ліберія',
        'Лівія',
        'Ліхтенштейн',
        'Литва',
        'Люксембург',
        'Північна Македонія',
        'Мадагаскар',
        'Малаві',
        'Малайзія',
        'Мальдіви',
        'Малі',
        'Мальта',
        'Маршаллові Острови',
        'Мавританія',
        'Маврикій',
        'Мексика',
        'Мікронезія',
        'Молдова',
        'Монако',
        'Монголія',
        'Чорногорія',
        'Марокко',
        'Мозамбік',
        'М\'янма',
        'Намібія',
        'Науру',
        'Непал',
        'Нідерланди',
        'Нова Зеландія',
        'Нікарагуа',
        'Нігер',
        'Нігерія',
        'Норвегія',
        'Оман',
        'Пакистан',
        'Палау',
        'Панама',
        'Папуа-Нова Гвінея',
        'Парагвай',
        'Перу',
        'Філіппіни',
        'Польща',
        'Португалія',
        'Катар',
        'Румунія',
        'Росія',
        'Руанда',
        'Сент-Кітс і Невіс',
        'Сент-Люсія',
        'Сент-Вінсент і Гренадіни',
        'Самоа',
        'Саудівська Аравія',
        'Сенегал',
        'Сербія',
        'Сейшельські Острови',
        'Сьєрра-Леоне',
        'Сінгапур',
        'Словаччина',
        'Словенія',
        'Соломонові острови',
        'Сомалі',
        'ПАР',
        'Іспанія',
        'Шрі Ланка',
        'Судан',
        'Сурінам',
        'Свазіленд',
        'Швеція',
        'Швейцарія',
        'Сирія',
        'Тайвань',
        'Таджикистан',
        'Танзанія',
        'Таїланд',
        'Того',
        'Тонга',
        'Тринідад і Тобаго',
        'Туніс',
        'Туреччина',
        'Туркменістан',
        'Тувалу',
        'Уганда',
        'Україна',
        'Об\'єднані Арабські Емірати',
        'Великобританія',
        'США',
        'Уругвай',
        'Узбекистан',
        'Вануату',
        'Ватикан',
        'Венесуела',
        'В\'єтнам',
        'Ємен',
        'Замбія',
        'Зімбабве',
    );

    /**
     * @see The administrative structure of Ukraine https://static.rada.gov.ua/zakon/new/NEWSAIT/ADM/zmist.html
     */
    protected static $region = array(
        'Вінницька',
        'Волинська',
        'Дніпропетровська',
        'Донецька',
        'Житомирська',
        'Закарпатська',
        'Запорізька',
        'Івано-Франківська',
        'Київська',
        'Кіровоградська',
        'Луганська',
        'Львівська',
        'Миколаївська',
        'Одеська',
        'Полтавська',
        'Рівненська',
        'Сумська',
        'Тернопільська',
        'Харківська',
        'Херсонська',
        'Хмельницька',
        'Черкаська',
        'Чернівецька',
        'Чернігівська'
    );

    /**
     * @see The administrative structure of Ukraine https://static.rada.gov.ua/zakon/new/NEWSAIT/ADM/zmist.html
     */
    protected static $city = array(
        'Вінниця',
        'Луцьк',
        'Дніпро',
        'Донецьк',
        'Житомир',
        'Ужгород',
        'Запоріжжя',
        'Івано-Франківськ',
        'Київ',
        'Кропивницький',
        'Луганськ',
        'Львів',
        'Миколаїв',
        'Одеса',
        'Полтава',
        'Рівне',
        'Суми',
        'Тернопіль',
        'Харків',
        'Херсон',
        'Хмельницький',
        'Черкаси',
        'Чернівці',
        'Чернігів'
    );

    /**
     * @see list of Ukraine street (2017-08-08), source: http://ukrexport.gov.ua/ukr/useful_info/gov/
     */
    protected static $street = array(
        'Тараса Шевченка',
        'Лесі Українки',
        'Михайла Грушевського',
        'Урицького',
        'П. Орлика',
        'Хрещатик',
        'Копиленка',
        'Різницька',
        'Лук’янівська',
        'Паторжинського',
        'Солом’янська',
        'Арсенальна',
        'Мельникова',
        'Володимирська',
        'Фізкультури',
        'Львівська',
        'Шота Руставелі',
        'Прорізна',
        'І. Франкa',
        'Б. Грінченка',
        'Інститутська',
        'Пирогова',
        'М. Коцюбинського',
        'Володимирська'
    );

    protected static $addressFormats = array(
        "{{postcode}}, {{cityAndRegion}}, {{streetPrefix}} {{streetName}}, {{buildingNumber}}",
    );

    protected static $streetAddressFormats = array(
        "{{streetPrefix}} {{streetName}}, {{buildingNumber}}"
    );

    public static function citySuffix()
    {
        // We don't use city suffix
        return '';
    }

    public static function streetSuffix()
    {
        // We don't use street suffix
        return '';
    }

    public function streetName()
    {
        return static::randomElement(static::$street);
    }

    public static function postcode()
    {
        return static::toUpper(static::bothify(static::randomElement(static::$postcode)));
    }

    public static function regionSuffix()
    {
        return static::randomElement(static::$regionSuffix);
    }

    public static function region()
    {
        return static::randomElement(static::$region);
    }

    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    public function city()
    {
        return static::randomElement(static::$city);
    }

    /**
     * Get city and region together
     * We need it because city and region must comply each other in Ukraine
     * @example 'Закарпатська область, місто Ужгород'
     * @return string
     */
    public function cityAndRegion()
    {
        $regionAndCityNumber = rand(0, count(static::$region) - 1);
        $region = static::$region[$regionAndCityNumber];
        $city = static::$city[$regionAndCityNumber];
        $format = "$region {{regionSuffix}}, {{cityPrefix}} $city";

        return $this->generator->parse($format);
    }

    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }
}
