<?php

namespace Faker\Provider\it_CH;

class Address extends \Faker\Provider\it_IT\Address
{
    protected static array $buildingNumber = ['###', '##', '#', '#a', '#b', '#c'];

    protected static array $streetPrefix = ['Piazza', 'Strada', 'Via', 'Borgo', 'Contrada', 'Rotonda', 'Incrocio'];

    protected static array $postcode = ['####'];

    /**
     * @see https://it.wikipedia.org/wiki/Citt%C3%A0_svizzere
     */
    protected static array $cityNames = [
        'Aarau',
        'Adliswil',
        'Aesch',
        'Affoltern am Albis',
        'Allschwil',
        'Altstätten',
        'Amriswil',
        'Arbon',
        'Arth',
        'Baar',
        'Baden',
        'Basilea',
        'Bassersdorf',
        'Bellinzona',
        'Belp',
        'Berna',
        'Bienne',
        'Binningen',
        'Birsfelden',
        'Briga-Glis',
        'Brugg',
        'Buchs',
        'Bulle',
        'Burgdorf',
        'Bülach',
        'Carouge',
        'Cham',
        'Chêne-Bougeries',
        'Coira',
        'Davos',
        'Delémont',
        'Dietikon',
        'Dübendorf',
        'Ebikon',
        'Ecublens',
        'Einsiedeln',
        'Emmen',
        'Frauenfeld',
        'Freienbach',
        'Friburgo',
        'Ginevra',
        'Gland',
        'Gossau',
        'Grenchen',
        'Herisau',
        'Hinwil',
        'Horgen',
        'Horw',
        'Illnau-Effretikon',
        'Ittigen',
        'Kloten',
        'Kreuzlingen',
        'Kriens',
        'Köniz',
        'Küsnacht',
        'Küssnacht',
        'La Chaux-de-Fonds',
        'La Tour-de-Peilz',
        'Lancy',
        'Langenthal',
        'Le Grand-Saconnex',
        'Le Locle',
        'Liestal',
        'Locarno',
        'Losanna',
        'Lucerna',
        'Lugano',
        'Lyss',
        'Martigny',
        'Meilen',
        'Mendrisio',
        'Meyrin',
        'Monthey',
        'Montreux',
        'Morges',
        'Muri bei Bern',
        'Muttenz',
        'Männedorf',
        'Möhlin',
        'Münchenstein',
        'Münsingen',
        'Neuchâtel',
        'Neuhausen am Rheinfall',
        'Nyon',
        'Oberwil',
        'Oftringen',
        'Olten',
        'Onex',
        'Opfikon',
        'Ostermundigen',
        'Pfäffikon',
        'Pratteln',
        'Prilly',
        'Pully',
        'Rapperswil-Jona',
        'Regensdorf',
        'Reinach',
        'Renens',
        'Rheinfelden',
        'Richterswil',
        'Riehen',
        'Rüti',
        'San Gallo',
        'Schlieren',
        'Sciaffusa',
        'Sierre',
        'Sion',
        'Soletta',
        'Spiez',
        'Spreitenbach',
        'Steffisburg',
        'Stäfa',
        'Svitto',
        'Thalwil',
        'Thun',
        'Thônex',
        'Uster',
        'Uzwil',
        'Val-de-Travers',
        'Vernier',
        'Versoix',
        'Vevey',
        'Veyrier',
        'Villars-sur-Glâne',
        'Volketswil',
        'Wallisellen',
        'Weinfelden',
        'Wettingen',
        'Wetzikon',
        'Wil',
        'Winterthur',
        'Wohlen',
        'Worb',
        'Wädenswil',
        'Yverdon-les-Bains',
        'Zofingen',
        'Zollikon',
        'Zugo',
        'Zurigo',
    ];

    /**
     * @see https://it.wikipedia.org/wiki/Cantoni_della_Svizzera
     */
    protected static array $canton = [
        ['AG' => 'Argovia'],
        ['AI' => 'Appenzello Interno'],
        ['AR' => 'Appenzello Esterno'],
        ['BE' => 'Berna'],
        ['BL' => 'Basilea Campagna'],
        ['BS' => 'Basilea Città'],
        ['FR' => 'Friburgo'],
        ['GE' => 'Ginevra'],
        ['GL' => 'Glarona'],
        ['GR' => 'Grigioni'],
        ['JU' => 'Giura'],
        ['LU' => 'Lucerna'],
        ['NE' => 'Neuchâtel'],
        ['NW' => 'Nidvaldo'],
        ['OW' => 'Obvaldo'],
        ['SG' => 'San Gallo'],
        ['SH' => 'Sciaffusa'],
        ['SO' => 'Soletta'],
        ['SZ' => 'Svitto'],
        ['TG' => 'Turgovia'],
        ['TI' => 'Ticino'],
        ['UR' => 'Uri'],
        ['VD' => 'Vaud'],
        ['VS' => 'Vallese'],
        ['ZG' => 'Zugo'],
        ['ZH' => 'Zurigo'],
    ];

    protected static array $cityFormats = [
        '{{cityName}}',
    ];

    protected static array $streetNameFormats = [
        '{{streetSuffix}} {{firstName}}',
        '{{streetSuffix}} {{lastName}}',
    ];

    protected static array $streetAddressFormats = [
        '{{streetName}} {{buildingNumber}}',
    ];
    protected static array $addressFormats = [
        "{{streetAddress}}\n{{postcode}} {{city}}",
    ];

    /**
     * Returns a random street prefix.
     *
     * @example Via
     */
    public static function streetPrefix(): string
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * Returns a random city name.
     *
     * @example Luzern
     */
    public function cityName(): string
    {
        return static::randomElement(static::$cityNames);
    }

    /**
     * Returns a canton.
     *
     * @example array('BE' => 'Bern')
     */
    public static function canton(): array
    {
        return static::randomElement(static::$canton);
    }

    /**
     * Returns the abbreviation of a canton.
     */
    public static function cantonShort(): string
    {
        $canton = static::canton();

        return \key($canton);
    }

    /**
     * Returns the name of canton.
     */
    public static function cantonName(): string
    {
        $canton = static::canton();

        return \current($canton);
    }
}
