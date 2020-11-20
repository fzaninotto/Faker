<?php

namespace Faker\Provider\de_AT;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = ['###', '##', '#', '##[abc]', '#[abc]'];

    protected static $streetSuffixLong = [
        'Gasse', 'Platz', 'Ring', 'Straße', 'Weg',
    ];
    protected static $streetSuffixShort = [
        'gasse', 'platz', 'ring', 'straße', 'weg',
    ];

    // As per https://en.wikipedia.org/wiki/List_of_postal_codes_in_Austria (@todo implement more strict postal code values according to wikipedia)
    protected static $postcode = [
        '1###',
        '2###',
        '3###',
        '4###',
        '5###',
        '6###',
        '7###',
        '8###',
        '9###',
    ];

    protected static $cityNames = [
        'Allentsteig', 'Altheim', 'Althofen', 'Amstetten', 'Ansfelden', 'Attnang-Puchheim',
        'Bad Aussee', 'Bad Hall', 'Bad Ischl', 'Bad Leonfelden', 'Bad Radkersburg', 'Bad Sankt Leonhard im Lavanttal', 'Bad Vöslau', 'Baden', 'Bärnbach', 'Berndorf', 'Bischofshofen', 'Bleiburg', 'Bludenz', 'Braunau am Inn', 'Bregenz', 'Bruck an der Leitha', 'Bruck an der Mur',
        'Deutsch-Wagram', 'Deutschlandsberg', 'Dornbirn', 'Drosendorf-Zissersdorf 1', 'Dürnstein',
        'Ebenfurth', 'Ebreichsdorf', 'Eferding', 'Eggenburg', 'Eisenerz', 'Eisenstadt', 'Enns',
        'Fehring', 'Feldbach', 'Feldkirch', 'Feldkirchen', 'Ferlach', 'Fischamend', 'Frauenkirchen', 'Freistadt', 'Friedberg', 'Friesach', 'Frohnleiten', 'Fürstenfeld',
        'Gallneukirchen', 'Gänserndorf', 'Geras', 'Gerasdorf bei Wien', 'Gföhl', 'Gleisdorf', 'Gloggnitz', 'Gmünd', 'Gmünd in Kärnten', 'Gmunden', 'Graz', 'Grein', 'Grieskirchen', 'Groß-Enzersdorf', 'Groß-Gerungs', 'Groß-Siegharts', 'Güssing',
        'Haag', 'Hainburg an der Donau', 'Hainfeld', 'Hall in Tirol', 'Hallein', 'Hardegg', 'Hartberg', 'Heidenreichstein', 'Hermagor-Pressegger See', 'Herzogenburg', 'Hohenems', 'Hollabrunn', 'Horn',
        'Imst', 'Innsbruck',
        'Jennersdorf', 'Judenburg',
        'Kapfenberg', 'Kindberg', 'Kirchdorf an der Krems', 'Kirchschlag in der Buckligen Welt', 'Kitzbühel', 'Klagenfurt', 'Klosterneuburg', 'Knittelfeld', 'Köflach', 'Korneuburg', 'Krems an der Donau', 'Kufstein',
        'Laa an der Thaya', 'Laakirchen', 'Landeck', 'Langenlois', 'Leibnitz', 'Leoben', 'Leonding', 'Lienz', 'Liezen', 'Lilienfeld', 'Linz', 'Litschau',
        'Maissau', 'Mank', 'Mannersdorf am Leithagebirge', 'Marchegg', 'Marchtrenk', 'Mariazell', 'Mattersburg', 'Mattighofen', 'Mautern an der Donau', 'Melk', 'Mistelbach an der Zaya', 'Mödling', 'Murau', 'Mureck', 'Mürzzuschlag',
        'Neufeld an der Leitha', 'Neulengbach', 'Neumarkt am Wallersee', 'Neunkirchen', 'Neusiedl am See',
        'Oberndorf bei Salzburg', 'Oberpullendorf', 'Oberwart', 'Oberwälz',
        'Perg', 'Peuerbach', 'Pinkafeld', 'Pöchlarn', 'Poysdorf', 'Pregarten', 'Pulkau', 'Purbach am Neusiedler See', 'Purkersdorf',
        'Raabs an der Thaya', 'Radenthein', 'Radstadt', 'Rattenberg', 'Retz', 'Ried im Innkreis', 'Rohrbach in Oberösterreich', 'Rottenmann', 'Rust',
        'Saalfelden am Steinernen Meer', 'Salzburg', 'Sankt Andrä im Lavanttal', 'Sankt Johann im Pongau', 'Sankt Pölten', 'Sankt Valentin', 'Sankt Veit an der Glan', 'Schärding', 'Scheibbs', 'Schladming', 'Schrattenthal', 'Schrems', 'Schwanenstadt', 'Schwaz', 'Schwechat', 'Seekirchen am Wallersee', 'Spittal an der Drau', 'Stadtschlaining', 'Steyr', 'Steyregg', 'Stockerau', 'Straßburg',
        'Ternitz', 'Traiskirchen', 'Traismauer', 'Traun', 'Trieben', 'Trofaiach', 'Tulln an der Donau',
        'Villach', 'Vils', 'Vöcklabruck', 'Voitsberg', 'Völkermarkt',
        'Waidhofen an der Thaya', 'Waidhofen an der Ybbs', 'Weitra', 'Weiz', 'Wels', 'Wien', 'Wiener Neustadt', 'Wieselburg', 'Wilhelmsburg', 'Wolfsberg', 'Wolkersdorf', 'Wörgl',
        'Ybbs an der Donau',
        'Zell am See', 'Zeltweg', 'Zistersdorf', 'Zwettl',
    ];

    protected static $state = [
        'Burgenland', 'Kärnten', 'Niederösterreich', 'Oberösterreich', 'Salzburg', 'Steiermark', 'Tirol', 'Vorarlberg', 'Wien'
    ];

    protected static $country = [
        'Afghanistan', 'Alandinseln', 'Albanien', 'Algerien', 'Amerikanisch-Ozeanien', 'Amerikanisch-Samoa', 'Amerikanische Jungferninseln', 'Andorra', 'Angola', 'Anguilla', 'Antarktis', 'Antigua und Barbuda', 'Argentinien', 'Armenien', 'Aruba', 'Aserbaidschan', 'Australien', 'Ägypten', 'Äquatorialguinea', 'Äthiopien', 'Äußeres Ozeanien',
        'Bahamas', 'Bahrain', 'Bangladesch', 'Barbados', 'Belarus', 'Belgien', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivien', 'Bosnien und Herzegowina', 'Botsuana', 'Bouvetinsel', 'Brasilien', 'Britische Jungferninseln', 'Britisches Territorium im Indischen Ozean', 'Brunei Darussalam', 'Bulgarien', 'Burkina Faso', 'Burundi',
        'Chile', 'China', 'Cookinseln', 'Costa Rica', 'Côte d’Ivoire',
        'Demokratische Republik Kongo', 'Demokratische Volksrepublik Korea', 'Deutschland', 'Dominica', 'Dominikanische Republik', 'Dschibuti', 'Dänemark',
        'Ecuador', 'El Salvador', 'Eritrea', 'Estland', 'Europäische Union',
        'Falklandinseln', 'Fidschi', 'Finnland', 'Frankreich', 'Französisch-Guayana', 'Französisch-Polynesien', 'Französische Süd- und Antarktisgebiete', 'Färöer',
        'Gabun', 'Gambia', 'Georgien', 'Ghana', 'Gibraltar', 'Grenada', 'Griechenland', 'Grönland', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard- und McDonald-Inseln', 'Honduras',
        'Indien', 'Indonesien', 'Irak', 'Iran', 'Irland', 'Island', 'Isle of Man', 'Israel', 'Italien',
        'Jamaika', 'Japan', 'Jemen', 'Jersey', 'Jordanien',
        'Kaimaninseln', 'Kambodscha', 'Kamerun', 'Kanada', 'Kap Verde', 'Kasachstan', 'Katar', 'Kenia', 'Kirgisistan', 'Kiribati', 'Kokosinseln', 'Kolumbien', 'Komoren', 'Kongo', 'Kroatien', 'Kuba', 'Kuwait',
        'Laos', 'Lesotho', 'Lettland', 'Libanon', 'Liberia', 'Libyen', 'Liechtenstein', 'Litauen', 'Luxemburg',
        'Madagaskar', 'Malawi', 'Malaysia', 'Malediven', 'Mali', 'Malta', 'Marokko', 'Marshallinseln', 'Martinique', 'Mauretanien', 'Mauritius', 'Mayotte', 'Mazedonien', 'Mexiko', 'Mikronesien', 'Monaco', 'Mongolei', 'Montenegro', 'Montserrat', 'Mosambik', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Neukaledonien', 'Neuseeland', 'Nicaragua', 'Niederlande', 'Niederländische Antillen', 'Niger', 'Nigeria', 'Niue', 'Norfolkinsel', 'Norwegen', 'Nördliche Marianen',
        'Oman', 'Osttimor', 'Österreich',
        'Pakistan', 'Palau', 'Palästinensische Gebiete', 'Panama', 'Papua-Neuguinea', 'Paraguay', 'Peru', 'Philippinen', 'Pitcairn', 'Polen', 'Portugal', 'Puerto Rico',
        'Republik Korea', 'Republik Moldau', 'Ruanda', 'Rumänien', 'Russische Föderation', 'Réunion',
        'Salomonen', 'Sambia', 'Samoa', 'San Marino', 'Saudi-Arabien', 'Schweden', 'Schweiz', 'Senegal', 'Serbien', 'Serbien und Montenegro', 'Seychellen', 'Sierra Leone', 'Simbabwe', 'Singapur', 'Slowakei', 'Slowenien', 'Somalia', 'Sonderverwaltungszone Hongkong', 'Sonderverwaltungszone Macao', 'Spanien', 'Sri Lanka', 'St. Barthélemy', 'St. Helena', 'St. Kitts und Nevis', 'St. Lucia', 'St. Martin', 'St. Pierre und Miquelon', 'St. Vincent und die Grenadinen', 'Sudan', 'Suriname', 'Svalbard und Jan Mayen', 'Swasiland', 'Syrien', 'São Tomé und Príncipe', 'Südafrika', 'Südgeorgien und die Südlichen Sandwichinseln',
        'Tadschikistan', 'Taiwan', 'Tansania', 'Thailand', 'Togo', 'Tokelau', 'Tonga', 'Trinidad und Tobago', 'Tschad', 'Tschechische Republik', 'Tunesien', 'Turkmenistan', 'Turks- und Caicosinseln', 'Tuvalu', 'Türkei',
        'Uganda', 'Ukraine', 'Unbekannte oder ungültige Region', 'Ungarn', 'Uruguay', 'Usbekistan',
        'Vanuatu', 'Vatikanstadt', 'Venezuela', 'Vereinigte Arabische Emirate', 'Vereinigte Staaten', 'Vereinigtes Königreich', 'Vietnam',
        'Wallis und Futuna', 'Weihnachtsinsel', 'Westsahara',
        'Zentralafrikanische Republik', 'Zypern',
    ];

    protected static $cityFormats = [
        '{{cityName}}',
    ];

    protected static $streetNameFormats = [
        '{{lastName}}{{streetSuffixShort}}',
        '{{firstName}}-{{lastName}}-{{streetSuffixLong}}'
    ];

    protected static $streetAddressFormats = [
        '{{streetName}} {{buildingNumber}}',
    ];
    protected static $addressFormats = [
        "{{streetAddress}}\n{{postcode}} {{city}}",
    ];

    public function cityName()
    {
        return static::randomElement(static::$cityNames);
    }

    public function streetSuffixShort()
    {
        return static::randomElement(static::$streetSuffixShort);
    }

    public function streetSuffixLong()
    {
        return static::randomElement(static::$streetSuffixLong);
    }

    /**
     * @example 'Wien'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }

    public static function buildingNumber()
    {
        return static::regexify(self::numerify(static::randomElement(static::$buildingNumber)));
    }
}
