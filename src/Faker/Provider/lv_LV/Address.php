<?php

namespace Faker\Provider\lv_LV;

class Address extends \Faker\Provider\Address
{
    protected static array $cityPrefix = ['pilsēta'];

    protected static array $regionSuffix = ['reģions'];
    protected static array $streetPrefix = [
        'iela',
        'bulvāris',
        'skvērs',
        'gāte',
    ];

    protected static array $buildingNumber = ['##'];
    protected static array $postcode = ['LV ####'];

    /**
     * @see https://lv.wikipedia.org/wiki/Suver%C4%93no_valstu_uzskait%C4%ABjums
     */
    protected static array $country = [
        'Afganistāna',
        'Albānija',
        'Alžīrija',
        'Amerikas Savienotās Valstis',
        'Andora',
        'Angola',
        'Antigva un Barbuda',
        'Apvienotie Arābu Emirāti',
        'Argentīna',
        'Armēnija',
        'Austrālija',
        'Austrija',
        'Austrumtimora',
        'Azerbaidžāna',
        'Bahamas',
        'Bahreina',
        'Baltkrievija',
        'Bangladeša',
        'Barbadosa',
        'Beliza',
        'Beļģija',
        'Benina',
        'Bolīvija',
        'Bosnija un Hercegovina',
        'Botsvana',
        'Brazīlija',
        'Bruneja',
        'Bulgārija',
        'Burkinafaso',
        'Burundi',
        'Butāna',
        'Centrālāfrikas Republika',
        'Čada',
        'Čehija',
        'Čīle',
        'Dānija',
        'Dienvidāfrikas Republika',
        'Dienvidkoreja',
        'Dienvidsudāna',
        'Dominika',
        'Dominikāna',
        'Džibutija',
        'Ekvadora',
        'Ekvatoriālā Gvineja',
        'Eritreja',
        'Etiopija',
        'Ēģipte',
        'Fidži',
        'Filipīnas',
        'Francija',
        'Gabona',
        'Gajāna',
        'Gambija',
        'Gana',
        'Grenada',
        'Grieķija',
        'Gruzija',
        'Gvatemala',
        'Gvineja',
        'Gvineja-Bisava',
        'Haiti',
        'Hondurasa',
        'Horvātija',
        'Igaunija',
        'Indija',
        'Indonēzija',
        'Irāka',
        'Irāna',
        'Islande',
        'Itālija',
        'Izraēla',
        'Īrija',
        'Jamaika',
        'Japāna',
        'Jaunzēlande',
        'Jemena',
        'Jordānija',
        'Kaboverde',
        'Kambodža',
        'Kamerūna',
        'Kanāda',
        'Katara',
        'Kazahstāna',
        'Kenija',
        'Kipra',
        'Kirgizstāna',
        'Kiribati',
        'Kolumbija',
        'Komoru Salas',
        'Kongo',
        'Kongo DR',
        'Kostarika',
        'Kotdivuāra',
        'Krievija',
        'Kuba',
        'Kuveita',
        'Ķīna',
        'Laosa',
        'Latvija',
        'Lesoto',
        'Libāna',
        'Libērija',
        'Lībija',
        'Lielbritānija',
        'Lietuva',
        'Lihtenšteina',
        'Luksemburga',
        'Madagaskara',
        'Maķedonijas Republika',
        'Malaizija',
        'Malāvija',
        'Maldīvija',
        'Mali',
        'Malta',
        'Maroka',
        'Māršala Salas',
        'Maurīcija',
        'Mauritānija',
        'Meksika',
        'Melnkalne',
        'Mikronēzija',
        'Mjanma',
        'Moldova',
        'Monako',
        'Mongolija',
        'Mozambika',
        'Namībija',
        'Nauru',
        'Nepāla',
        'Nīderlande',
        'Nigēra',
        'Nigērija',
        'Nikaragva',
        'Norvēģija',
        'Omāna',
        'Pakistāna',
        'Palau',
        'Panama',
        'Papua-Jaungvineja',
        'Paragvaja',
        'Peru',
        'Polija',
        'Portugāle',
        'Ruanda',
        'Rumānija',
        'Salvadora',
        'Samoa',
        'Sanmarīno',
        'Santome un Prinsipi',
        'Saūda Arābija',
        'Seišelu Salas',
        'Senegāla',
        'Sentkitsa un Nevisa',
        'Sentlūsija',
        'Sentvinsenta un Grenadīnas',
        'Serbija',
        'Singapūra',
        'Sīrija',
        'Sjerraleone',
        'Slovākija',
        'Slovēnija',
        'Somālija',
        'Somija',
        'Spānija',
        'Sudāna',
        'Surinama',
        'Svazilenda',
        'Šrilanka',
        'Šveice',
        'Tadžikistāna',
        'Taizeme',
        'Tanzānija',
        'Togo',
        'Tonga',
        'Trinidāda un Tobāgo',
        'Tunisija',
        'Turcija',
        'Turkmenistāna',
        'Tuvalu',
        'Uganda',
        'Ukraina',
        'Ungārija',
        'Urugvaja',
        'Uzbekistāna',
        'Vācija',
        'Vanuatu',
        'Vatikāns',
        'Venecuēla',
        'Vjetnama',
        'Zālamana Salas',
        'Zambija',
        'Ziemeļkoreja',
        'Zimbabve',
        'Zviedrija',
    ];

    protected static array $region = [
        'Kurzemes',
        'Latgales',
        'Rīgas',
        'Vidzemes',
        'Zemgales',
    ];

    protected static array $city = [
        'Aizkraukle',
        'Aluksne',
        'Balvi',
        'Bauska',
        'Cesis',
        'Daugavpils',
        'Dobele',
        'Gulbene',
        'Jekabpils',
        'Jelgava',
        'Kraslava',
        'Kuldiga',
        'Liepaja',
        'Limbazi',
        'Ludza',
        'Madona',
        'Mobile Phones',
        'Ogre',
        'Preili',
        'Rezekne',
        'Rīga',
        'Ventspils',
    ];

    protected static array $street = [
        'Alfrēda Kalniņa',
        'Alksnāja',
        'Amatu',
        'Anglikāņu',
        'Arhitektu',
        'Arsenāla',
        'Artilērijas',
        'Aspazijas',
        'Atgriežu',
        'Audēju',
        'Basteja',
        'Baumaņa',
        'Bīskapa',
        'Blaumaņa',
        'Brīvības',
        'Brīvības',
        'Bruņinieku',
        'Dainas',
        'Daugavas',
    ];

    protected static array $addressFormats = [
        '{{postcode}}, {{region}} {{regionSuffix}}, {{city}} {{cityPrefix}}, {{street}} {{streetPrefix}}, {{buildingNumber}}',
    ];

    public static function buildingNumber(): string
    {
        return static::numerify(static::randomElement(static::$buildingNumber));
    }

    public function address(): string
    {
        $format = static::randomElement(static::$addressFormats);

        return $this->generator->parse($format);
    }

    public static function country(): string
    {
        return static::randomElement(static::$country);
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

    public static function streetPrefix(): string
    {
        return static::randomElement(static::$streetPrefix);
    }

    public static function street(): string
    {
        return static::randomElement(static::$street);
    }
}
