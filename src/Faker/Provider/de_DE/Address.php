<?php

namespace Faker\Provider\de_DE;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = array('###', '##', '#', '#/#', '##[abc]', '#[abc]');

    protected static $streetSuffixLong = array(
        'Gasse', 'Platz', 'Ring', 'Straße', 'Weg', 'Allee'
    );
    protected static $streetSuffixShort = array(
        'gasse', 'platz', 'ring', 'straße', 'str.', 'weg', 'allee'
    );

    protected static $postcode = array('#####');
    
    /**
     * @link https://de.wikipedia.org/wiki/Liste_der_St%C3%A4dte_in_Deutschland
     */
    protected static $cityNames = array(
        'Augsburg', 'Aschaffenburg', 'Aachen', 'Auerbach', 'Ahaus', 'Amberg', 'Ansbach', 'Angermünde', 'Anklam', 'Altötting', 'Apolda', 'Arnstadt', 'Artern', 'Altentreptow', 'Aue', 'Aurich',
        'Berlin', 'Bamberg', 'Bad Aibling', 'Bad Brückenau', 'Bad Doberan', 'Bad Freienwalde', 'Bad Kissingen', 'Bad Kreuznach', 'Bad Langensalza', 'Bad Liebenwerda', 'Bad Mergentheim', 'Bad Salzungen', 'Böblingen', 'Bernburg', 'Brand-Erbisdorf', 'Beilngries', 'Belzig', 'Berchtesgaden', 'Biedenkopf', 'Bischofswerda', 'Backnang', 'Borna', 'Bogen', 'Borken', 'Bruchsal', 'Brandenburg', 'Burg', 'Brilon', 'Bremervörde', 'Bersenbrück', 'Beeskow', 'Bayreuth', 'Bitterfeld', 'Burgdorf', 'Burglengenfeld', 'Büsingenm Hochrhein', 'Bützow', 'Bautzen', 'Bergzabern',
        'Chemnitz', 'Calau', 'Cottbus', 'Celle', 'Cloppenburg', 'Coburg', 'Crailsheim', 'Cuxhaven', 'Calw',
        'Darmstadt', 'Dachau', 'Dresden', 'Dessau', 'Deggendorf', 'Diepholz', 'Dieburg', 'Dinslaken', 'Dinkelsbühl', 'Döbeln', 'Demmin', 'Düren', 'Donaueschingen', 'Duderstadt', 'Delitzsch',
        'Eilenburg', 'Ebersberg', 'Ebern', 'Ebermannstadt', 'Eckernförde', 'Erding', 'Erfurt', 'Eggenfelden', 'Eisenhüttenstadt', 'Eichstätt', 'Eisleben', 'Einbeck', 'Eisenberg', 'Emmendingen', 'Erkelenz', 'Eisenach', 'Euskirchen', 'Eutin', 'Eberswalde', 'Soltau-Fallingbostel',
        'Fulda', 'Freudenstadt', 'Feuchtwangen', 'Fürstenfeldbruck', 'Main-Höchst', 'Finsterwalde', 'Flöha', 'Forchheim', 'Forst', 'Freising', 'Freital', 'Füssen', 'Fürstenwalde',
        'Gera', 'Gardelegen', 'Garmisch-Partenkirchen', 'Schwäbisch Gmünd', 'Gadebusch', 'Geldern', 'Gerolzhofen', 'Germersheim', 'Gifhorn', 'Groß-Gerau', 'Geithain', 'Gräfenhainichen', 'Gießen', 'Grimmen', 'Gelnhausen', 'Genthin', 'Sankt Goar', 'Sankt Goarshausen', 'Göttingen', 'Göppingen', 'Görlitz', 'Grafenau', 'Großenhain', 'Griesbach Rottal', 'Grimma', 'Gransee', 'Greiz', 'Goslar', 'Gütersloh', 'Gotha', 'Guben', 'Gunzenhausen', 'Güstrow', 'Grevenbroich', 'Grevesmühlen', 'Günzburg',
        'Hannover', 'Hammelburg', 'Bremen', 'Hildburghausen', 'Halberstadt', 'Hainichen', 'Hechingen', 'Haldensleben', 'Helmstedt', 'Hersbruck', 'Hettstedt', 'Herford', 'Hagenow', 'Greifswald', 'Hamburg', 'Hohenmölsen', 'Hildesheim', 'Heiligenstadt', 'Lübeck', 'Hannoversch Münden', 'Hofgeismar', 'Holzminden', 'Hohenstein-Ernstthal', 'Rostock', 'Heinsberg', 'Hansestadttralsund', 'Hünfeld', 'Husum', 'Havelberg', 'Wismar', 'Höxter', 'Hoyerswerda', 'Herzberg',
        'Ilmenau', 'Illertissen', 'Ingolstadt', 'Iserlohn',
        'Jena', 'Jüterbog', 'Jessen', 'Jülich',
        'Karlsruhe', 'Kronach', 'Kelheim', 'Kehl', 'Kemnath', 'Kaiserslautern', 'Kleve', 'Klötze', 'Kamenz', 'Konstanz', 'Koblenz', 'Kötzting', 'Kassel', 'Kitzingen', 'Kulmbach', 'Kusel', 'Königs Wusterhausen', 'Kyritz',
        'Leipziger Land', 'Ludwigsburg', 'Lobenstein', 'Lübz', 'Luckau', 'Lemgo', 'Lüneburg', 'Lüdinghausen', 'Lichtenfels', 'Lübben', 'Lörrach', 'Lippstadt', 'Lüdenscheid', 'Luckenwalde', 'Ludwigslust',
        'München', 'Marienberg', 'Mainburg', 'Mallersdorf', 'Marktheidenfeld', 'Miesbach', 'Malchin', 'Magdeburg', 'Mettmann', 'Melsungen', 'Meißen', 'Melle', 'Meppen', 'Merseburg', 'Mellrichstadt', 'Meiningen', 'Mühlhausen', 'Miltenberg', 'Moers', 'Monschau', 'Mühldorf am Inn', 'Mittweida', 'Mayen',
        'Nabburg', 'Naila', 'Nauen', 'Neubrandenburg', 'Nordhausen', 'Neuss', 'Neunburg vorm Wald', 'Neustadt an der Waldnaab', 'Northeim', 'Norden', 'Nördlingen', 'Neuruppin', 'Neustadt am Rübenberge', 'Nürtingen', 'Neu-Ulm', 'Niesky', 'Neustrelitz',
        'Osterburg', 'Ochsenfurt', 'Olpe', 'Osterode am Harz', 'Oranienburg', 'Oberviechtach', 'Oschatz',
        'Potsdam', 'Passau', 'Pfaffenhofen an der Ilm', 'Parsberg', 'Paderborn', 'Parchim', 'Peine', 'Pegnitz', 'Perleberg', 'Pinneberg', 'Pritzwalk', 'Plauen', 'Pößneck', 'Pirmasens', 'Pasewalk', 'Prenzlau',
        'Querfurt', 'Quedlinburg',
        'Regensburg', 'Rastatt', 'Ribnitz-Damgarten', 'Recklinghausen', 'Regen', 'Rehau', 'Roth', 'Riesa', 'Rochlitz', 'Rathenow', 'Rosenheim', 'Roding', 'Rockenhausen', 'Rothenburg ob der Tauber', 'Reutlingen', 'Rudolstadt', 'Ravensburg', 'Rottweil',
        'Stuttgart', 'Schwandorf', 'Säckingen', 'Stadtsteinach', 'Saarbrücken', 'Strasburg', 'Schleiz', 'Stade', 'Sondershausen', 'Stendal', 'Sebnitz', 'Seelow', 'Scheinfeld', 'Senftenberg', 'Staßfurt', 'Sangerhausen', 'Schwäbisch Hall', 'Suhl', 'Siegen', 'Sigmaringen', 'Saulgau', 'Schmölln', 'Saarlouis', 'Schlüchtern', 'Schwabmünchen', 'Schwerin', 'Soest', 'Schrobenhausen', 'Schongau', 'Soltau', 'Sömmerda', 'Sonneberg', 'Spremberg', 'Strausberg', 'Stadtroda', 'Steinfurt', 'Starnberg', 'Sternberg', 'Stade', 'Staffelstein', 'Stollberg', 'Sulzbach-Rosenberg', 'Schweinfurt', 'Schwarzenberg',
        'Tecklenburg', 'Teterow', 'Torgau', 'Tirschenreuth', 'Tuttlingen', 'Tübingen',
        'Uelzen', 'Ueckermünde', 'Uffenheim',
        'Vechta', 'Vilsbiburg', 'Viersen', 'Viechtach', 'Vohenstrauß',
        'Warendorf', 'Wittenberg', 'Worbis', 'Wiedenbrück', 'Werdau', 'Weimar', 'Wertingen', 'Wesel', 'Wolfenbüttel', 'Witzenhausen', 'Wittstock', 'Wolgast', 'Wolmirstedt', 'Wolfach', 'Wolfratshausen', 'Wernigerode', 'Waren', 'Weißenfels', 'Weißwasser', 'Wittmund', 'Waldmünchen', 'Wunsiedel', 'Wurzen', 'Wetzlar', 'Wanzleben',
        'Zerbst', 'Zschopau', 'Zeulenroda', 'Zossen'
    );
    
    /**
     * @link https://de.wikipedia.org/wiki/Land_(Deutschland)
     */
    protected static $state = array(
        array('BW' => 'Baden-Württemberg'),
        array('BY' => 'Bayern'),
        array('BE' => 'Berlin'),
        array('BB' => 'Brandenburg'),
        array('HB' => 'Bremen'),
        array('HH' => 'Hamburg'),
        array('HE' => 'Hessen'),
        array('MV' => 'Mecklenburg-Vorpommern'),
        array('NI' => 'Niedersachsen'),
        array('NW' => 'Nordrhein-Westfalen'),
        array('RP' => 'Rheinland-Pfalz'),
        array('SL' => 'Saarland'),
        array('SN' => 'Sachsen'),
        array('ST' => 'Sachsen-Anhalt'),
        array('SH' => 'Schleswig-Holstein'),
        array('TH' => 'Thüringen')
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
    
    /**
     * Returns a random city name
     * @example München
     * @return string
     */
    public function cityName()
    {
        return static::randomElement(static::$cityNames);
    }
    
    /**
     * Returns a random street suffix
     * @example str.
     * @return string
     */
    public function streetSuffixShort()
    {
        return static::randomElement(static::$streetSuffixShort);
    }
    
    /**
     * Returns a random street suffix.
     * @example Straße
     * @return string
     */
    public function streetSuffixLong()
    {
        return static::randomElement(static::$streetSuffixLong);
    }

    /**
     * Returns a random state
     * @example array('BY' => 'Bayern')
     * @return array
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }
    
    /**
     * Returns the abbreviation of a state
     * @example BY
     * @return string
     */
    public static function stateShort()
    {
        $state = static::state();
        return key($state);
    }
    
    /**
     * Returns the name of a state
     * @example Bayern
     * @return string
     */
    public static function stateName()
    {
        $state = static::state();
        return current($state);
    }
    
    /**
     * Returns a building number
     * @example 23a
     * @return string
     */
    public static function buildingNumber()
    {
        return static::regexify(self::numerify(static::randomElement(static::$buildingNumber)));
    }
}
