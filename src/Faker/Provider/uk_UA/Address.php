<?php

namespace Faker\Provider\uk_UA;

class Address extends \Faker\Provider\Address
{
    protected static array $cityPrefix = ['місто'];
    protected static array $regionSuffix = ['область'];
    protected static array $streetPrefix = [
        'вул.',
        'пров.',
        'пл.',
        'просп.',
    ];
    protected static array $buildingNumber = ['##'];
    protected static array $postcode = ['#####'];
    protected static array $country = [
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
        'Багамські острови',
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
        'Центрально-Африканська Республіка',
        'Чад',
        'Чилі',
        'Китай',
        'Колумбія',
        'Коморські острови',
        'Конго',
        'Конго, Демократична Республіка',
        'Коста-Ріка',
        'Хорватія',
        'Куба',
        'Кіпр',
        'Чеська республіка',
        'Данія',
        'Джибуті',
        'Домініка',
        'Домініканська Республіка',
        'східний Тимор',
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
        'Киргизія',
        'Лаос',
        'Латвія',
        'Ліван',
        'Лесото',
        'Ліберія',
        'Лівія',
        'Ліхтенштейн',
        'Литва',
        'Люксембург',
        'Македонії',
        'Мадагаскар',
        'Малаві',
        'Малайзія',
        'Мальдіви',
        'Малі',
        'Мальта',
        'Маршаллові острови',
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
        'Російська Федерація',
        'Руанда',
        'Сент-Кітс і Невіс',
        'Сент-Люсія',
        'Сент-Вінсент і Гренадіни',
        'Самоа',
        'Саудівська Аравія',
        'Сенегал',
        'Сербія',
        'Сейшельські острови',
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
        'Сполучені Штати',
        'Уругвай',
        'Узбекистан',
        'Вануату',
        'Ватикан',
        'Венесуела',
        'В\'єтнам',
        'Ємен',
        'Замбія',
        'Зімбабве',
    ];

    protected static array $region = [
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
        'Чернігівська',
    ];

    protected static array $city = [
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
        'Чернігів',
    ];

    /**
     * @see list of Ukraine street (2017-08-08), source: http://ukrexport.gov.ua/ukr/useful_info/gov/
     */
    protected static array $street = [
        'Тараса Шевченка',
        'Лесі Українки',
        'Михайла Грушевського',
        'Урицького',
        'П. Орлика',
        'Хрещатик',
        'Артема',
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
        'Володимирська',
    ];

    protected static array $addressFormats = [
        '{{postcode}}, {{cityAndRegion}}, {{streetPrefix}} {{streetName}}, {{buildingNumber}}',
    ];

    protected static array $streetAddressFormats = [
        '{{streetPrefix}} {{streetName}}, {{buildingNumber}}',
    ];

    public static function citySuffix(): string
    {
        // We don't use city suffix
        return '';
    }

    public static function streetSuffix(): string
    {
        // We don't use street suffix
        return '';
    }

    public function streetName(): string
    {
        return static::randomElement(static::$street);
    }

    public static function postcode(): string
    {
        return static::toUpper(static::bothify(static::randomElement(static::$postcode)));
    }

    public static function regionSuffix(): string
    {
        return static::randomElement(static::$regionSuffix);
    }

    public static function region(): string
    {
        return static::randomElement(static::$region);
    }

    public static function cityPrefix(): string
    {
        return static::randomElement(static::$cityPrefix);
    }

    public function city(): string
    {
        return static::randomElement(static::$city);
    }

    /**
     * Get city and region together
     * We need it because city and region must comply each other in Ukraine.
     *
     * @example 'Закарпатська область, місто Ужгород'
     */
    public function cityAndRegion(): string
    {
        $regionAndCityNumber = \rand(0, \count(static::$region) - 1);
        $region = static::$region[$regionAndCityNumber];
        $city = static::$city[$regionAndCityNumber];
        $format = "$region {{regionSuffix}}, {{cityPrefix}} $city";

        return $this->generator->parse($format);
    }

    public static function streetPrefix(): string
    {
        return static::randomElement(static::$streetPrefix);
    }
}
