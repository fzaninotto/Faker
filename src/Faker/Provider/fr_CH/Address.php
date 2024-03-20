<?php

namespace Faker\Provider\fr_CH;

class Address extends \Faker\Provider\fr_FR\Address
{
    protected static array $buildingNumber = ['###', '##', '#', '#a', '#b', '#c'];

    protected static array $streetPrefix = ['Rue', 'Rue', 'Chemin', 'Avenue', 'Boulevard', 'Place', 'Impasse'];

    protected static array $postcode = ['####'];

    /**
     * @see https://fr.wikipedia.org/wiki/Villes_de_Suisse
     */
    protected static array $cityNames = [
        'Aarau',
        'Aarberg',
        'Aarburg',
        'Agno',
        'Aigle VD',
        'Altdorf',
        'Altstätten',
        'Appenzell',
        'Arbon',
        'Ascona',
        'Aubonne',
        'Avenches',
        'Baden',
        'Bad Zurzach',
        'Bâle',
        'Bellinzone',
        'Berne',
        'Beromünster',
        'Berthoud',
        'Biasca',
        'Bienne',
        'Bischofszell',
        'Boudry',
        'Bourg-Saint-Pierre',
        'Bremgarten AG',
        'Brigue',
        'Brugg',
        'Bulle',
        'Bülach',
        'Cerlier',
        'Châtel-Saint-Denis',
        'Coire',
        'Conthey',
        'Coppet',
        'Cossonay',
        'Croglio',
        'Cudrefin',
        'Cully',
        'Delémont',
        'Diessenhofen',
        'Échallens',
        'Eglisau',
        'Elgg',
        'Estavayer-le-Lac',
        'Frauenfeld',
        'Fribourg',
        'Genève',
        'Glaris',
        'Gordola',
        'Grandcour',
        'Grandson',
        'Greifensee',
        'Grüningen',
        'Gruyères',
        'Hermance',
        'Huttwil',
        'Ilanz',
        'Kaiserstuhl',
        'Klingnau',
        'La Chaux-de-Fonds',
        'La Neuveville',
        'La Sarraz',
        'La Tour-de-Peilz',
        'La Tour-de-Trême',
        'Le Landeron',
        'Les Clées',
        'Lachen',
        'Langenthal',
        'Laufon',
        'Laufenburg',
        'Laupen',
        'Lausanne',
        'Lenzburg',
        'Loèche',
        'Lichtensteig',
        'Liestal',
        'Locarno',
        'Losone',
        'Lugano',
        'Lutry',
        'Lucerne',
        'Maienfeld',
        'Martigny',
        'Mellingen',
        'Mendrisio',
        'Monthey',
        'Morat',
        'Morcote',
        'Morges',
        'Moudon',
        'Moutier',
        'Münchenstein',
        'Neuchâtel',
        'Neunkirch',
        'Nidau',
        'Nyon',
        'Olten',
        'Orbe',
        'Orsières',
        'Payerne',
        'Porrentruy',
        'Rapperswil',
        'Regensberg',
        'Rheinau',
        'Rheineck',
        'Rheinfelden',
        'Riva San Vitale',
        'Rolle',
        'Romainmôtier',
        'Romont FR',
        'Rorschach',
        'Rue',
        'Saillon',
        'Saint-Maurice',
        'Saint-Prex',
        'Saint-Ursanne',
        'Sala',
        'Saint-Gall',
        'Sargans',
        'Sarnen',
        'Schaffhouse',
        'Schwytz',
        'Sembrancher',
        'Sempach',
        'Sion',
        'Soleure',
        'Splügen',
        'Stans',
        'Steckborn',
        'Stein am Rhein',
        'Sursee',
        'Thoune',
        'Thusis',
        'Unterseen',
        'Uznach',
        'Valangin',
        'Vevey',
        'Villeneuve',
        'Viège',
        'Waldenburg',
        'Walenstadt',
        'Wangen an der Aare',
        'Werdenberg',
        'Wiedlisbach',
        'Wil',
        'Willisau',
        'Winterthour',
        'Yverdon-les-Bains',
        'Zofingue',
        'Zoug',
        'Zurich',
    ];

    /**
     * @see https://fr.wikipedia.org/wiki/Canton_suisse
     */
    protected static array $canton = [
        ['AG' => 'Argovie'],
        ['AI' => 'Appenzell Rhodes-Intérieures'],
        ['AR' => 'Appenzell Rhodes-Extérieures'],
        ['BE' => 'Berne'],
        ['BL' => 'Bâle-Campagne'],
        ['BS' => 'Bâle-Ville'],
        ['FR' => 'Fribourg'],
        ['GE' => 'Genève'],
        ['GL' => 'Glaris'],
        ['GR' => 'Grisons'],
        ['JU' => 'Jura'],
        ['LU' => 'Lucerne'],
        ['NE' => 'Neuchâtel'],
        ['NW' => 'Nidwald'],
        ['OW' => 'Obwald'],
        ['SG' => 'Saint-Gall'],
        ['SH' => 'Schaffhouse'],
        ['SO' => 'Soleure'],
        ['SZ' => 'Schwytz'],
        ['TG' => 'Thurgovie'],
        ['TI' => 'Tessin'],
        ['UR' => 'Uri'],
        ['VD' => 'Vaud'],
        ['VS' => 'Valais'],
        ['ZG' => 'Zoug'],
        ['ZH' => 'Zurich'],
    ];

    protected static array $cityFormats = [
        '{{cityName}}',
    ];

    protected static array $streetNameFormats = [
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} de {{cityName}}',
        '{{streetPrefix}} de {{lastName}}',
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
     * @example Rue
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
