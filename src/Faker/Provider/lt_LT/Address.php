<?php

namespace Faker\Provider\lt_LT;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = array('miestas');

    protected static $regionSuffix = array('regionas');
    protected static $streetSuffix = array(
        'g.', 'gatvė', 'prospektas', 'alėja',
    );

    protected static $buildingNumber = array('##');

    protected static $postcode = array('LT-#####');

    protected static $country = array(
    'Afganistanas', 'Airija', 'Alandų salos', 'Albanija', 'Alžyras', 'Amerikos Samoa', 'Andora',
    'Angilija', 'Angola', 'Antarktis', 'Antigva ir Barbuda', 'Argentina', 'Armėnija', 'Aruba', 'Australija', 'Austrija',
    'Azerbaidžanas', 'Bahamos', 'Bahreinas', 'Baltarusija', 'Bangladešas', 'Barbadosas', 'Belgija', 'Belizas',
    'Beninas', 'Bermuda', 'Bisau Gvinėja', 'Bolivija', 'Bosnija ir Hercegovina', 'Botsvana', 'Bouvet sala', 'Brazilija',
    'Brunėjus', 'Bulgarija', 'Burkina Fasas', 'Burundis', 'Butanas', 'Centrinės Afrikos Respublika', 'Danija',
    'Didžioji Britanija', 'Didžiosios Britanijos Mergelių salos', 'Dominika', 'Dominikos Respublika',
    'Dramblio Kaulo Krantas',
    'Džersis', 'Džibutis', 'Egiptas', 'Ekvadoras', 'Eritrėja', 'Estija', 'Etiopija', 'Falklando salos', 'Farerų salos',
    'Fidžis', 'Filipinai', 'Gabonas', 'Gajana', 'Gambija', 'Gana', 'Gibraltaras', 'Graikija', 'Grenada', 'Grenlandija',
    'Gruzija', 'Guamas', 'Guernsis', 'Gvadelupė', 'Gvatemala', 'Gvinėja', 'Haitis', 'Heardo ir McDonaldo Salų Sritis',
    'Hondūras', 'Indija', 'Indijos vandenyno britų sritis', 'Indonezija', 'Irakas', 'Iranas', 'Islandija', 'Ispanija',
    'Italija', 'Izraelis', 'Jamaika', 'Japonija', 'Jemenas', 'Jordanija', 'Jungtiniai Arabų Emyratai', 'Jungtinių
    Valstijų mažosios aplinkinės salos', 'Jungtinės Valstijos', 'Juodkalnija', 'Kaimanų salos', 'Kalėdų sala',
    'Kambodža', 'Kamerūnas', 'Kanada', 'Kataras', 'Kazachstanas', 'Kenija', 'Kinija', 'Kinijos S.A.R.Honkongas',
    'Kipras', 'Kirgiztanas', 'Kiribatis', 'Kokosų salos', 'Kolumbija', 'Komorai', 'Kongas', 'Kongo Demokratinė
    Respublika', 'Kosta Rika', 'Kroatija', 'Kuba', 'Kuko salos', 'Kuveitas', 'Laosas', 'Latvija', 'Lenkija', 'Lesotas',
    'Libanas', 'Liberija', 'Libija', 'Lichtenšteinas', 'Lietuva', 'Liuksemburgas', 'Macao', 'Madagaskaras',
    'Makedonija', 'Malaizija', 'Malavis', 'Maldivai', 'Malis', 'Malta', 'Marianos šiaurinės salos', 'Marokas',
    'Martinika', 'Maršalo Salos', 'Mauricijus', 'Mauritanija', 'Mayotte’as', 'Meino sala', 'Meksika', 'Mergelių salos
    (JAV)', 'Mianmaras', 'Mikronezija', 'Moldova', 'Monakas', 'Mongolija', 'Montserratas', 'Mozambikas', 'Namibija',
    'Naujoji Kaledonija', 'Naujoji Zelandija', 'Nauru', 'Nepalas', 'Nežinoma ar neteisinga sritis', 'Nigerija',
    'Nigeris', 'Nikaragva', 'Niue', 'Norfolko sala', 'Norvegija', 'Nyderlandai', 'Olandijos Antilai', 'Omanas',
    'Pakistanas', 'Palau', 'Palestinos teritorija', 'Panama', 'Papua Naujoji Gvinėja', 'Paragvajus', 'Peru', 'Pietų
    Afrika', 'Pietų Džordžija ir Pietų Sandvičo salos', 'Pietų Korėja', 'Pitkernas', 'Portugalija', 'Prancūzija',
    'Prancūzijos Gviana', 'Prancūzijos Pietų sritys', 'Prancūzų Polinezija', 'Puerto Rikas', 'Pusiaujo Gvinėja',
    'Reunionas', 'Ruanda', 'Rumunija', 'Rusijos Federacija', 'Rytų Timoras', 'Saint-Martin', 'Saliamono salos',
    'Salvadoras', 'Samoa', 'San Marinas', 'San Tomė ir Principė', 'Saudo Arabija', 'Seišeliai', 'Sen Pjeras ir
    Mikelonas', 'Senegalas', 'Sent Kitsas ir Nevis', 'Serbija', 'Serbija ir Juodkalnija', 'Siera Leonė', 'Singapūras',
    'Sirija', 'Slovakija', 'Slovėnija', 'Somalis', 'Sudanas', 'Suomija', 'Surinamas', 'Svalbardo ir Jan Majen salos',
    'Svazilendas', 'Tadžikistanas', 'Tailandas', 'Taivanas', 'Tanzanija', 'Togas', 'Tokelau', 'Tonga', 'Trinidadas ir
    Tobagas', 'Tunisas', 'Turkija', 'Turkmėnistanas', 'Turkso ir Caicoso salos', 'Tuvalu', 'Uganda', 'Ukraina',
    'Urugvajus', 'Uzbekistanas', 'Vakarų Sachara', 'Vanuatu', 'Vatikanas', 'Venesuela', 'Vengrija', 'Vietnamas',
    'Vokietija', 'Wallisas ir Futuna', 'Zambija', 'Zimbabvė', 'Čadas', 'Čekija', 'Čilė', 'Šiaurės Korėja', 'Šri Lanka',
    'Švedija', 'Šveicarija', 'Šventasis Vincentas ir Grenadinai', 'Švento Baltramiejaus sala', 'Šventoji Elena',
    'Šventoji Liucija', 'Žaliasis Kyšulys');

    /**
     * @link https://lt.wikipedia.org/wiki/Lietuvos_etnokult%C5%ABriniai_regionai
     */
    protected static $region = array(
        'Aukštaitija', 'Dzūkija', 'Suvalkija', 'Žemaitija'
    );

    /**
     * @link https://lt.wikipedia.org/wiki/S%C4%85ra%C5%A1as:Lietuvos_miestai_pagal_gyventojus
     */
    protected static $city = array('Vilnius', 'Kaunas', 'Klaipėda', 'Šiauliai', 'Panevėžys',
        'Alytus', 'Marijampolė', 'Mažeikiai', 'Jonava', 'Utena', 'Kėdainiai', 'Telšiai', 'Visaginas', 'Tauragė',
        'Ukmergė'
    );

    protected static $street = array(
        'Klaipėdos', 'Vilniaus', 'Kauno', 'Žalgirio', 'Saltoniškių', 'Laisvės', 'Didžioji', 'Liepų'
    );

    protected static $addressFormats = array(
        "{{street}} {{streetSuffix}} {{buildingNumber}}-{{buildingNumber}}, {{city}}",
        "{{street}} {{streetSuffix}} {{buildingNumber}}, {{city}}",
        "{{street}} {{streetSuffix}} {{buildingNumber}}, {{city}} {{postcode}}",
    );

    public static function buildingNumber()
    {
        return static::numerify(static::randomElement(static::$buildingNumber));
    }

    public function address()
    {
        $format = static::randomElement(static::$addressFormats);

        return $this->generator->parse($format);
    }

    public static function country()
    {
        return static::randomElement(static::$country);
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

    public static function citySuffix()
    {
        return static::randomElement(static::$citySuffix);
    }

    public function city()
    {
        return static::randomElement(static::$city);
    }

    public static function streetSuffix()
    {
        return static::randomElement(static::$streetSuffix);
    }

    public static function street()
    {
        return static::randomElement(static::$street);
    }
}
