<?php

namespace Faker\Provider\de_CH;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = array('####a', '###', '##', '#');

    protected static $streetSuffixLong = array(
        'Rue', 'Gasse', 'Platz', 'Ring', 'Straße', 'Weg', 'Allee'
    );
    protected static $streetSuffixShort = array(
        'rue', 'gasse', 'platz', 'ring', 'straße', 'str.', 'weg', 'allee'
    );

    protected static $postcode = array('####');

    protected static $cityNames = array(
        'Alchenstorf', 'Altbüron', 'Alten', 'Altenrhein', 'Arvigo', 'Ausserbinn', 'Ayer', 'Ägerten', 'Ämet', 'Ötikon', 'Bernrain', 'Biel', 'Boulens', 'Branche-d\'en-Haut', 'Breiten', 'Breitenegg', 'Bussenhusen', 'Camperio', 'Caux', 'Champoussin', 'Chavannes-des-Bois', 'Chemin', 'Châtelaine', 'Coffrane', 'Dalin', 'Darnona', 'Densbüren', 'Diemberg', 'Donzhausen', 'Dussnang', 'Dättwil', 'Ecoteaux', 'Emdthal', 'Ennetaach', 'Epauvillers', 'Ermatingen', 'Essert-sous-Champvent', 'Etzwil', 'Falera', 'Felsenegg', 'Ferden', 'Feschel', 'Flums', 'Forel-sur-Lucens', 'Féchy', 'Galgenen', 'Geiss', 'Gempenach', 'Geroldswil', 'Glas', 'Glis', 'Glockenthal', 'Heisch', 'Hinterthal', 'Hochwald', 'Hof', 'Holzenstein', 'Huttwil', 'Hölstein', 'Ichertswil', 'Ifwil', 'Illgau', 'Inden', 'Isenbergschwil', 'Itramen', 'Itzikon', 'Jakobsthal', 'Jenaz', 'Jerisberghof', 'Jeuss', 'Jouxtens', 'Jungfraujoch', 'Jussy', 'Kirchenfeld', 'Kleinguschelmuth', 'Klingenzell', 'Klingnau', 'Klybeck', 'Kosthofen', 'Küsnacht', 'La Tanne', 'Lauterbach', 'Lavertezzo', 'Les Prés-d\'Orvin', 'Les Reussilles', 'Les Rondez', 'Läui', 'Madulain', 'Malapalud', 'Merzligen', 'Mirchel', 'Montenol', 'Muriaux', 'Mézery-près-Donneloye', 'Neudorf', 'Neuenkirch', 'Neuhaus bei Hinteregg', 'Neustalden', 'Niederhünigen', 'Niederried bei Kallnach', 'Niederschongau', 'Oberegg', 'Obergoldbach', 'Oberholz', 'Oberhöri', 'Oberwiesen', 'Opfertshofen', 'Oulens-sous-Echallens', 'Pampigny', 'Perroy', 'Pleigne', 'Ponto Valentino', 'Porsel', 'Porza', 'Puplinge', 'Quarten', 'Quartino', 'Quinten', 'Quinto', 'Rancate', 'Rathausen', 'Reuti', 'Romont', 'Rossinière', 'Rämismühle', 'Rütli', 'Saanen', 'Saclentz', 'Schnottwil', 'Sonzier', 'Sood', 'Sottens', 'St-Triphon', 'Tannenheim', 'Thörigen', 'Trans', 'Turbenthal', 'Turgi', 'Twerenegg', 'Tössriederen', 'Uetliburg', 'Uffikon', 'Uitikon', 'Unteregg', 'Unterehrendingen', 'Unterhard', 'Untersteckholz', 'Vella', 'Venthône', 'Vernex', 'Villaz', 'Vira', 'Vissoie', 'Vogorno', 'Wasserfluh', 'Weissenburgberg', 'Weissenstein bei Solothurn', 'Weisslingen', 'Wilen bei Neunforn', 'Winden', 'Wohlei', 'Yens', 'Ypresses', 'Yverdon-les-Bains', 'Yvonand', 'Yvorne', 'Zalende', 'Zalön', 'Zetzwil', 'Ziegelbrücke', 'Zorten', 'Zwischenflüh', 'Zürich'
    );

    protected static $state = array(
        'Aargau', 'Appenzell Ausserrhoden', 'Appenzell Innerrhoden', 'Basel-Landschaft', 'Basel-Stadt', 'Bern', 'Genf', 'Glarus', 'Graubünden', 'Jura', 'Luzern', 'Neuenburg', 'Nidwalden', 'Obwalden', 'Schaffhausen', 'Schwyz', 'Solothurn', 'St. Gallen', 'Tessin', 'Thurgau', 'Uri', 'Waadt', 'Wallis', 'Zug', 'Zürich'
    );

    protected static $country = array(
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
    );

    protected static $cityFormats = array(
        '{{cityName}}',
    );

    protected static $streetNameFormats = array(
        '{{lastName}}{{streetSuffixShort}}',
        '{{firstName}}-{{lastName}}-{{streetSuffixLong}}'
    );

    protected static $streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
    );
    protected static $addressFormats = array(
        "{{streetAddress}}\n{{postcode}} {{city}}",
    );

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
     * @example 'Zürich'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }
}
