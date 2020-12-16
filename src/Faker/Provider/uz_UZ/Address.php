<?php

namespace Faker\Provider\uz_UZ;

/**
 * Class Address
 * Description: Generates Uzbek addresses
 *
 * @category  Classes
 * @package   Faker\Provider\uz_UZ
 * @author    Erkin Pardayev <erkin.pardayev@gmail.com>
 * @copyright 2020 Erkin Pardayev
 * @license   GNU https://ru.wikipedia.org/wiki/GNU_General_Public_License
 * @link      https://pardayev.uz
 */

class Address extends \Faker\Provider\Address
{
    /**
     * @var string[]
     */
    protected static $cityPrefix = array('shahri', 'tumani');

    /**
     * @var string[]
     * Adding suffix for region
     */
    protected static $regionSuffix = array('viloyati');
    /**
     * @var string[]
     */
    protected static $streetPrefix = array(
        'ko\'chasi.', 'shosse', 'mahallasi'
    );

    /**
     * @var string[]
     */
    protected static $buildingNumber = array('##');
    /**
     * @var string[]
     */
    protected static $postcode = array('######');

    /**
     * @var string[]
     */
    protected static $country = array(
        'Afg‘oniston', 'Albaniya', 'Amerika Qo\'shma Shtatlari', 'Andorra', 'Angola',
        'Antigua va Barbuda', 'Argentina', 'Armaniston', 'Avstraliya', 'Avstriya',
        'Bagamalar', 'Bahrayn', 'Bangladesh', 'Barbados', 'Belarus', 'Belgiya',
        'Beliz', 'Benin', 'Birlashgan Arab Amirliklari', 'Birma', 'Bolgariya',
        'Boliviya', 'Bosniya va Gersegovina', 'Botsvana', 'Braziliya', 'Bruney',
        'Buyuk Britaniya', 'Burkina Faso', 'Burundi', 'Butan', 'Daniya', 'Dominika',
        'Dominika Respublikasi', 'Efiopiya', 'Ekvador', 'Ekvatorial Gvineya',
        'Eron', 'Estoniya', 'Fiji', 'Filippin', 'Finlyandiya', 'Fransiya', 'Gabon',
        'Gaiti', 'Gambiya', 'Gana', 'Germaniya', 'Gonduras', 'Grenada', 'Gretsiya',
        'Gruziya', 'Guyana', 'Gvatemala', 'Gvineya', 'Gvineya-Bisau', 'Hindiston',
        'Indoneziya', 'Iordaniya', 'Irlandiya', 'Iroq', 'Islandiya', 'Ispaniya',
        'Isroil', 'Italiya', 'Janubiy Afrika', 'Janubiy Koreya', 'Janubiy Sudan',
        'Jazoir', 'Jibuti', 'Kabo-Verde', 'Kambodja', 'Kamerun', 'Kanada', 'Keniya',
        'Kipr', 'Kiribati', 'Kolumbiya', 'Eritreya', 'Komoros',
        'Kongo Demokratik Respublikasi', 'Kongo Respublikasi', 'Kosta Rika',
        'Kot-d\'Ivuar', 'Kuba', 'Laos', 'Latviya', 'Lesoto', 'Liberiya', 'Litva',
        'Livan', 'Liviya', 'Lixtenshteyn', 'Luksemburg', 'Madagaskar', 'Makedoniya',
        'Malavi', 'Malayziya', 'Maldiv Respublikasi', 'Mali',
        'Malta', 'Markaziy Afrika Respublikasi', 'Marokash', 'Marshall Orollari',
        'Mavrikiy', 'Mavritaniya', 'Meksika', 'Mikroneziya', 'Misr', 'Moldova',
        'Monako', 'Mongoliya', 'Montenegro', 'Mozambik',
        'Namibiya', 'Nauru', 'Nepal', 'Niger', 'Nigeriya', 'Niderlandiya',
        'Nikaragua', 'Norvegiya', 'Oman', 'Ozarbayjon', 'Palau', 'Panama',
        'Papua-Yangi Gvineya', 'Paragvay', 'Peru', 'Pokiston', 'Polsha',
        'Portugaliya', 'Qatar', 'Qirg\'iziston', 'Qozog\'iston', 'Quvayt',
        'Rossiya', 'Ruanda', 'Ruminiya', 'Salvador', 'Samoa', 'San Marino',
        'San-Tome va Prinsipi', 'Saudiya Arabistoni', 'Senegal',
        'Sent-Kits va Nevis', 'Sent Lusiya', 'Sent Vinsent va Grenadinlar',
        'Serbiya', 'Seyshell orollari', 'Shimoliy Koreya', 'Singapur',
        'Slovakiya', 'Sloveniya', 'Solomon Orollari', 'Somali', 'Sudan',
        'Surinam', 'Suriya', 'Svazilend', 'Syerra-Leone', 'Tailand', 'Tanzaniya',
        'Togo', 'Tojikiston', 'Tonga', 'Trinidad va Tobago', 'Tunis', 'Turkiya',
        'Turkmaniston', 'Tuvalu', 'Uganda', 'Ukraina', 'Urugvay', 'Vanuatu',
        'Venesuela', 'Vengriya', 'Vyetnam', 'Xitoy', 'Xorvatiya', 'Yaman',
        'Yangi Zelandiya', 'Yaponiya', 'Zambiya', 'Zimbabve', 'Oʻzbekiston',
        'Sharqiy Timor', 'Vatikan', 'Yamayka', 'Shri Lanka', 'Shvetsiya',
        'Shveytsariya', 'Chad', 'Chexiya', 'Chili'
    );

    /**
     * @var string[]
     */
    protected static $region = array(
        'Andijon', 'Buxoro', 'Farg\'ona', 'Jizzax', 'Xorazm', 'Namangan',
        'Navoiy', 'Qashqadaryo', 'Qoraqalpogʻiston Respublikasi', 'Samarqand',
        'Sirdaryo', 'Surxondaryo', 'Toshkent'
    );

    /**
     * @var string[]
     */
    protected static $city = array(
        'Amudaryo', 'Beruniy', 'Kegayli', 'Qonliko‘l', 'Qorao‘zak', 'Qo‘ng‘irot',
        'Mo‘ynoq', 'Nukus', 'Nukus shahri', 'Taxtako‘pir', 'To‘rtko‘l', 'Xo‘jayli',
        'CHimboy', 'SHumanay', 'Ellikqal‘a', 'Andijon shahri', 'Andijon', 'Asaka',
        'Baliqchi', 'Buloqboshi', 'Bo‘z', 'Jalaquduq', 'Izbosgan', 'Qorasuv shahri',
        'Qo‘rg‘ontepa', 'Marhamat', 'Oltinko‘l', 'Paxtaobod', 'Ulug‘nor', 'Xonabod',
        'Xo‘jaobod shahri', 'Shaxrixon', 'Buxoro shahri', 'Buxoro', 'Vobkent',
        'G‘ijduvon', 'Jondor', 'Kogon', 'Kogon shahri', 'Qorako‘l', 'Qorovulbozor',
        'Olot', 'Peshku', 'Romitan', 'Shofirkon', 'Arnasoy', 'Baxmal', 'G‘allaorol',
        'Do‘stlik', 'Sh.Rashidov', 'Jizzax shahri', 'Zarbdor', 'Zafarobod', 'Zomin',
        'Mirzacho‘l', 'Paxtakor', 'Forish', 'Yangiobod', 'G‘uzor', 'Dehqonobod',
        'Qamashi', 'Qarshi', 'Qarshi shahri', 'Kasbi', 'Kitob', 'Koson', 'Mirishkor',
        'Muborak', 'Nishon', 'Chiroqchi', 'Shahrisabz', 'Zarafshon shahri',
        'Karmana', 'Qiziltepa', 'Konimex', 'Navbahor', 'Navoiy shahri', 'Nurota',
        'Tomdi', 'Uchquduq', 'Xatirchi', 'Kosonsoy', 'Mingbuloq', 'Namangan',
        'Namangan shahri', 'Norin', 'Pop', 'To‘raqo‘rg‘on', 'Uychi', 'Uchqo‘rg‘on',
        'Chortoq', 'Chust', 'Yangiqo‘rg‘on', 'Bulung‘ur', 'Jomboy', 'Ishtixon',
        'Kattaqo‘rg‘on', 'Kattaqo‘rg‘on shahri', 'Qo‘shrabot', 'Narpay', 'Nurabod',
        'Oqdaryo', 'Payariq', 'Pastarg‘om', 'Paxtachi', 'Samarqand', 'Buvayda',
        'Toyloq', 'Urgut', 'Angor', 'Boysun', 'Denov', 'Jarqo‘rg‘on', 'Qiziriq',
        'Qo‘mqo‘rg‘on', 'Muzrabot', 'Oltinsoy', 'Sariosiy', 'Termiz',
        'Uzun', 'Sherobod', 'Sho‘rchi', 'Boyovut', 'Guliston', 'Chinoz',
        'Mirzaobod', 'Oqoltin', 'Sayxunobod', 'Sardoba', 'Sirdaryo', 'Xavos',
        'Shirin shahri', 'Yangier shahri', 'Angiren shahri', 'Bekabod',
        'Bo‘ka', 'Bo‘stonliq', 'Zangiota', 'Qibray', 'Quyichirchiq', 'Oqqo‘rg‘on',
        'Olmaliq shahri', 'Ohangaron', 'Parkent', 'Piskent', 'O‘rtachirchiq',
        'Chirchiq shahri', 'Yuqorichirchiq', 'Yangiyo‘l', 'Beshariq', 'Bog‘dod',
        'Dang‘ara', 'Yozyovon', 'Quva', 'Quvasoy shahri', 'Qo‘qon shahri',
        'Marg‘ilon shahri', 'Oltiariq', 'Rishton', 'So‘x', 'Toshloq', 'Uchko‘prik',
        'O‘zbekiston', 'Farg‘ona', 'Farg‘ona shahri', 'Furqat', 'Bog‘ot', 'Gurlan',
        'Qo‘shko‘pir', 'Urganch', 'Urganch shahri', 'Xiva', 'Xazarasp', 'Xonqa',
        'Shavot', 'Yangiariq', 'Yangibozor', 'Bektimer', 'M.Ulug‘bek', 'Mirobod',
        'Olmazor', 'Sergeli', 'Uchtepa', 'Yashnobod', 'Chilonzor', 'Shayxontohur',
        'Yunusobod', 'Yakkasaroy', 'Taxiatosh shahri', 'Asaka shahri', 'Bandixon',
        'Ohangaron shahri', 'Yangiyo‘l shahri', 'Toshkent', 'Yakkabog‘','Qo‘shtepa',
    );

    /**
     * @var string[]
     */
    protected static $street = array(
        'Abdulla Oripov', 'Jayhun', 'Islom Karimov', 'Mustaqillik', 'Olchazor',
        'Olmazor', 'Tinchlik', 'Nasaf', 'Erkin', 'Chuqursoy', 'Bog‘ishamol',
        'Yangishahar', 'Do‘rmon yo‘li', '1-berk', 'Beruniy'
    );

    /**
     * @var string[]
     */
    protected static $addressFormats = array(
        "{{postcode}}, {{region}} {{regionSuffix}}, {{city}} {{cityPrefix}},
        {{street}} {{streetPrefix}}, {{buildingNumber}}",
    );

    /**
     * @var string[]
     */
    protected static $streetAddressFormats = array(
        "{{street}} {{streetPrefix}}, {{buildingNumber}}"
    );

    /**
     * @return string
     */
    public static function buildingNumber()
    {
        return static::numerify(static::randomElement(static::$buildingNumber));
    }

    /**
     * @return string
     */
    public function address()
    {
        $format = static::randomElement(static::$addressFormats);

        return $this->generator->parse($format);
    }

    /**
     * @return mixed|null
     */
    public static function country()
    {
        return static::randomElement(static::$country);
    }

    /**
     * @return string
     */
    public static function postcode()
    {
        return static::toUpper(
            static::bothify(
                static::randomElement(static::$postcode)
            )
        );
    }

    /**
     * @return mixed|null
     */
    public static function regionSuffix()
    {
        return static::randomElement(static::$regionSuffix);
    }

    /**
     * @return mixed|null
     */
    public static function region()
    {
        return static::randomElement(static::$region);
    }

    /**
     * @return mixed|null
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @return mixed|string|null
     */
    public function city()
    {
        return static::randomElement(static::$city);
    }

    /**
     * @return mixed|null
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * @return mixed|null
     */
    public static function street()
    {
        return static::randomElement(static::$street);
    }
}
