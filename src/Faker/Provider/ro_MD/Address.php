<?php

namespace Faker\Provider\ro_MD;

class Address extends \Faker\Provider\Address
{
    protected static array $buildingNumber = ['###', '##', '#', '#/#', '#A', '#B'];
    protected static array $apartmentNumber = ['#', '##'];
    protected static array $floor = ['#', '##'];
    protected static array $block = ['#', '##', 'A', 'B', 'C', 'D'];
    protected static array $blockSegment = ['A', 'B', 'C', 'D'];

    protected static array $streetPrefix = [
        'Str.',
        'B-dul.',
        'Aleea',
        'Calea',
        'P-ța',
        'Str-la',
    ];

    // random selection of seemingly frequently used streets and naming categories
    protected static array $streetPlainName = [
        // historical events
        'Eroilor',
        'Independenței',
        'Lenin',
        'Unirii',
        '31 August 1989',
        'Sovietului',
        // historical people
        'Mihai Viteazul',
        'Mircea cel Bătrân',
        'Mitropolitul Varlaam',
        'Traian',
        'Decebal',
        'Alexandru cel Bun',
        'Alexandri V.',
        'Arhangelul Mihail',
        // national and international people names
        'Veronica Micle',
        'Ion Creangă',
        'Mihai Eminescu',
        'B. P. Hașdeu',
        // nature-related
        'Cireșilor',
        'Frasinului',
        'Salcâmilor',
        'Brăduțului',
        'Frunzișului',
        'Castanilor',
        'Mesteacănului',
        'Florilor',
        'Pădurii',
        'Piersicului',
        'Trandafirilor',
        // work-related
        'Croitorilor',
        'Meșterilor',
        'Zidarilor',
        'Păcurari',
        'Muncii',
        'Învățătorului',
        // geography related
        'Chisinau',
        'Paris',
    ];

    protected static array $postcode = ['####'];

    // http://ro.wikipedia.org/wiki/Lista_ora%C8%99elor_din_Republica_Moldova
    protected static array $cityNames = [
        'Chișinău',
        'Tiraspol',
        'Bălți',
        'Tighina',
        'Râbnița',
        'Cahul',
        'Ungheni',
        'Soroca',
        'Orhei',
        'Dubăsari',
        'Comrat',
        'Ceadâr-Lunga',
        'Strășeni',
        'Căușeni',
        'Drochia',
        'Slobozia',
        'Edineț',
        'Vulcănești',
        'Durlești',
        'Hâncești',
        'Ialoveni',
        'Fălești',
        'Călărași',
        'Codru',
        'Taraclia',
        'Florești',
        'Cimișlia',
        'Sângerei',
        'Dnestrovsc',
        'Nisporeni',
        'Grigoriopol',
        'Basarabeasca',
        'Râșcani',
        'Glodeni',
        'Camenca',
        'Rezina',
        'Leova',
        'Cricova',
        'Dondușeni',
        'Ocnița',
        'Briceni',
        'Otaci',
        'Anenii Noi',
        'Ștefan Vodă',
        'Cupcini',
        'Sângera',
        'Criuleni',
        'Telenești',
        'Șoldănești',
        'Tvardița',
        'Lipcani',
        'Vadul lui Vodă',
        'Iargara',
        'Căinari',
        'Cantemir',
        'Vatra',
        'Biruința',
        'Crasnoe',
        'Cornești',
        'Costești',
        'Mărculești',
        'Ghindești',
        'Tiraspolul Nou',
        'Frunză',
        'Bucovăț',
        'Maiac',
    ];

    // http://ro.wikipedia.org/wiki/Lista_statelor_lumii#Lista_statelor_lumii
    protected static array $country = [
        'Afganistan',
        'Africa de Sud',
        'Albania',
        'Algeria',
        'Andorra',
        'Angola',
        'Antigua și Barbuda',
        'Arabia Saudită',
        'Argentina',
        'Armenia',
        'Australia',
        'Austria',
        'Azerbaidjan',
        'Bahamas',
        'Bahrain',
        'Bangladesh',
        'Barbados',
        'Belarus',
        'Belgia',
        'Belize',
        'Benin',
        'Bhutan',
        'Birmania',
        'Bolivia',
        'Bosnia și Herțegovina',
        'Botswana',
        'Brazilia',
        'Brunei',
        'Bulgaria',
        'Burkina Faso',
        'Burundi',
        'Cambodgia',
        'Camerun',
        'Canada',
        'Capul Verde',
        'Cehia',
        'Republica Centrafricană',
        'Chile',
        'Republica Populară Chineză',
        'Ciad',
        'Cipru',
        'Columbia',
        'Comore',
        'Republica Democrată Congo',
        'Republica Congo',
        'Coreea de Nord',
        'Coreea de Sud',
        'Costa Rica',
        'Coasta de Fildeș',
        'Croația',
        'Cuba',
        'Danemarca',
        'Djibouti',
        'Dominica',
        'Republica Dominicană',
        'Ecuador',
        'Egipt',
        'El Salvador',
        'Elveția',
        'Emiratele Arabe Unite',
        'Eritreea',
        'Estonia',
        'Etiopia',
        'Fiji',
        'Filipine',
        'Finlanda',
        'Franța',
        'Gabon',
        'Gambia',
        'Georgia',
        'Germania',
        'Ghana',
        'Grecia',
        'Grenada',
        'Guatemala',
        'Guineea',
        'Guineea-Bissau',
        'Guineea Ecuatorială',
        'Guyana',
        'Haiti',
        'Honduras',
        'India',
        'Indonezia',
        'Iordania',
        'Irak',
        'Iran',
        'Republica Irlanda',
        'Islanda',
        'Israel',
        'Italia',
        'Jamaica',
        'Japonia',
        'Kazahstan',
        'Kenya',
        'Kirghizstan',
        'Kiribati',
        'Kuweit',
        'Laos',
        'Lesotho',
        'Letonia',
        'Liban',
        'Liberia',
        'Libia',
        'Liechtenstein',
        'Lituania',
        'Luxemburg',
        'Republica Macedonia',
        'Madagascar',
        'Malawi',
        'Malaezia',
        'Maldive',
        'Mali',
        'Malta',
        'Maroc',
        'Insulele Marshall',
        'Mauritania',
        'Mauritius',
        'Mexic',
        'Statele Federate ale Microneziei',
        'Republica Moldova',
        'Monaco',
        'Mongolia',
        'Mozambic',
        'Muntenegru',
        'Namibia',
        'Nauru',
        'Nepal',
        'Nicaragua',
        'Niger',
        'Nigeria',
        'Norvegia',
        'Noua Zeelandă',
        'Olanda',
        'Oman',
        'Pakistan',
        'Palau',
        'Panama',
        'Papua Noua Guinee',
        'Paraguay',
        'Peru',
        'Polonia',
        'Portugalia',
        'Qatar',
        'Regatul Unit',
        'România',
        'Rusia',
        'Rwanda',
        'Samoa',
        'San Marino',
        'São Tomé și Príncipe',
        'São Tomé e Príncipe',
        'Senegal',
        'Serbia',
        'Seychelles',
        'Sfânta Lucia',
        'Sfântul Cristofor și Nevis',
        'Saint Vincent and the Grenadines',
        'Sierra Leone',
        'Singapore',
        'Siria',
        'Slovacia',
        'Slovenia',
        'Insulele Solomon',
        'Somalia',
        'Spania',
        'Sri Lanka',
        'Statele Unite ale Americii',
        'Sudan',
        'Sudanul de Sud',
        'Suedia',
        'Surinam',
        'Swaziland',
        'Tadjikistan',
        'Tanzania',
        'Thailanda',
        'Timorul de Est',
        'Togo',
        'Tonga',
        'Trinidad-Tobago',
        'Tunisia',
        'Turcia',
        'Turkmenistan',
        'Tuvalu',
        'Ucraina',
        'Uganda',
        'Ungaria',
        'Uruguay',
        'Uzbekistan',
        'Vanuatu',
        'Vatican',
        'Venezuela',
        'Vietnam',
        'Yemen',
        'Zambia',
        'Zimbabwe',
    ];

    protected static array $cityFormats = [
        '{{cityName}}',
        'Mun. {{cityName}}',
    ];

    protected static array $streetNameFormats = [
        '{{streetPrefix}} {{streetPlainName}}',
    ];

    protected static array $streetAddressFormats = [
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} nr. {{buildingNumber}}, bl. {{block}}, ap. {{apartmentNumber}}',
        '{{streetName}} nr. {{buildingNumber}}, bl. {{block}}, et. {{floor}}, ap. {{apartmentNumber}}',
        '{{streetName}} nr. {{buildingNumber}}, bl. {{block}}, sc. {{blockSegment}}, et. {{floor}}, ap. {{apartmentNumber}}',
    ];

    protected static array $addressFormats = [
        '{{streetAddress}}, {{city}}, CP {{postcode}}',
    ];

    public function cityName()
    {
        return static::randomElement(static::$cityNames);
    }

    public static function block(): string
    {
        return static::numerify(static::randomElement(static::$block));
    }

    public function blockSegment()
    {
        return static::randomElement(static::$blockSegment);
    }

    public static function floor(): string
    {
        return static::numerify(static::randomElement(static::$floor));
    }

    public static function apartmentNumber(): string
    {
        return static::numerify(static::randomElement(static::$apartmentNumber));
    }

    public function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * @example 'Independenței'
     */
    public function streetPlainName()
    {
        return static::randomElement(static::$streetPlainName);
    }

    /**
     * @example 'Splaiul Independenței'
     */
    public function streetName(): string
    {
        $format = static::randomElement(static::$streetNameFormats);

        return $this->generator->parse($format);
    }

    public function address(): string
    {
        $format = static::randomElement(static::$addressFormats);

        return $this->generator->parse($format);
    }

    public function streetAddress(): string
    {
        $format = static::randomElement(static::$streetAddressFormats);

        return $this->generator->parse($format);
    }
}
