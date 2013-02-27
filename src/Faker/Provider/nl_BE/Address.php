<?php

namespace Faker\Provider\nl_BE;

class Address extends \Faker\Provider\Address
{
    protected static $postcode = array('####');

    protected static $streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}'
    );

    protected static $streetNameFormats = array('{{lastName}}{{streetSuffix}}');

    protected static $cityFormats = array('{{cityName}}');

    protected static $addressFormats = array(
        "{{streetAddress}}\n {{postcode}} {{city}}",
    );

    protected static $streetSuffix = array(
        'baan', 'boulevard', 'dreef', 'hof', 'laan', 'pad', 'ring', 'singel', 'steeg', 'straat', 'weg',
    );

    /**
     * Export of BAG (http://bag.vrom.nl/)
     * last updated 2012/11/09
     *
     * @var array
     */
    protected static $cityNames = array(
        'Aalst', 'Aarlen', 'Aarschot', 'Aat', 'Andenne', 'Antoing', 'Antwerpen', 'Bastenaken', 'Beringen',
        'Beaumont', 'Beauraing', 'Bergen', 'Bilzen', 'Binche', 'Blankenberge', 'Borgloon', 'Borgworm', 'Bouillon',
        'Bree', 'Brugge', 'Brussel', 'Charleroi', 'Châtelet', 'Chièvres', 'Chimay', 'Chiny', 'Ciney', 'Couvin',
        'Damme', 'Deinze', 'Dendermonde', 'Diest', 'Diksmuide', 'Dilsen-Stokkem', 'Dinant', 'Doornik', 'Durbuy',
        'Edingen', 'Eeklo', 'Eupen', 'Fleurus', 'Florenville', 'Fontaine-l\'Evêque', 'Fosses-la-Ville', 'Geel',
        'Geldenaken', 'Gembloers', 'Genepiën', 'Genk', 'Gent', 'Geraardsbergen', 'Gistel', '\'s-Gravenbrakel',
        'Halen', 'Halle', 'Hamont-Achel', 'Hannuit', 'Harelbeke', 'Hasselt', 'Herentals', 'Herk-de-Stad', 'Herstal',
        'Herve', 'Hoei', 'Hoogstraten', 'Houffalize', 'Ieper', 'Izegem', 'Komen-Waasten', 'Kortrijk', 'La Louvière',
        'La Roche-en-Ardenne', 'Landen', 'Le Rœulx', 'Lessen', 'Leuze-en-Hainaut', 'Leuven', 'Lier', 'Limburg',
        'Lo-Reninge', 'Lokeren', 'Lommel', 'Luik', 'Maaseik', 'Malmedy', 'Marche-en-Famenne', 'Mechelen', 'Menen',
        'Mesen', 'Moeskroen', 'Mortsel', 'Namen', 'Neufchâteau', 'Nieuwpoort', 'Nijvel', 'Ninove', 'Oostende',
        'Ottignies', 'Oudenaarde', 'Oudenburg', 'Peer', 'Péruwelz', 'Philippeville', 'Poperinge', 'Rochefort',
        'Roeselare', 'Ronse', 'Saint-Ghislain', 'Saint-Hubert', 'Sankt Vith', 'Scherpenheuvel-Zichem', 'Seraing',
        'Sint-Niklaas', 'Sint-Truiden', 'Spa', 'Stavelot', 'Thuin', 'Tielt', 'Tienen', 'Tongeren', 'Torhout',
        'Turnhout', 'Verviers', 'Veurne', 'Vilvoorde', 'Virton', 'Walcourt', 'Waregem', 'Waver', 'Wervik', 'Wezet',
        'Zinnik', 'Zottegem', 'Zoutleeuw'
    );

    protected static $state = array(
        'Antwerpen', 'Limburg', 'Oost-Vlaanderen', 'Vlaams-Brabant', 'West-Vlaanderen',
        'Henegouwen', 'Luik', 'Luxemburg', 'Namen', 'Waals-Brabant'
    );

    protected static $country = array(
        'Afghanistan', 'Albanië', 'Algerije', 'Amerikaans-Samoa', 'Andorra', 'Angola', 'Amerikaanse Virgineilanden',
        'Anguilla', 'Antartica', 'Antigua en Barbuda', 'Argentinië', 'Armenië', 'Aruba', 'Australië', 'Azerbeidzjan',
        'Bahamas', 'Bahrein', 'Bangladesh', 'Barbados', 'België', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia',
        'Bosnië-Herzegovina', 'Botswana', 'Bouvet Eiland (Bouvetoya)', 'Brazilië', 'Britse Maagdeneilanden',
        'Brunei Darussalam', 'Bulgarije', 'Burkina Faso', 'Burundi', 'Cambodja', 'Canada',
        'Centraal-Afrikaanse Republiek', 'Chili', 'China', 'Christmaseiland', 'Cocoseilanden', 'Colombia', 'Comoren',
        'Congo', 'Cookeilanden', 'Costa Rica', 'Cuba', 'Cyprus', 'Denemarken', 'Djibouti', 'Dominica',
        'Dominicaanse Republiek', 'Duitsland', 'Ecuador', 'Egypte', 'El salvador', 'Equatoriaal-Guinea', 'Eritrea',
        'Estland', 'Ethiopië', 'Faroe Eilanden', 'Falklandeilanden', 'Fiji', 'Finland', 'Frankrijk', 'Frans-Guyana',
        'Frans-Polynesië', 'Franse Zuidelijke en Antarctische Gebieden', 'Gabon', 'Gambia', 'Georgië', 'Ghana',
        'Gibraltar', 'Griekenland', 'Groenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinee',
        'Guinee-Bissau', 'Guyana', 'Haïti', 'Heard en McDonaldeilanden', 'Honduras', 'Hong Kong', 'Hongarije',
        'IJsland', 'India', 'Indonesië', 'Iran', 'Irak', 'Ierland', 'Man', 'Israel', 'Ivoorkust', 'Italië', 'Jamaica',
        'Japan', 'Jersey', 'Jordanië', 'Jemen', 'Kazachstan', 'Kenia',
        'Kleinere afgelegen eilanden van de Verenigde staten', 'Kiribati', 'Korea', 'Koeweit', 'Kirgizië', 'Kameroen',
        'Kaapverdië', 'Kaaimaneilanden', 'Kroatië', 'Laos', 'Letland', 'Libanon', 'Lesotho', 'Liberia', 'Libië',
        'Liechtenstein', 'Litouwen', 'Luxemburg', 'Macau', 'Macedonië', 'Madagascar', 'Malawi', 'Maleisië', 'Maldiven',
        'Mali', 'Malta', 'Marshalleilanden', 'Martinique', 'Mauritus', 'Mauritania', 'Mayotte', 'Mexico', 'Micronesië',
        'Moldavië', 'Monaco', 'Mongolië', 'Montenegro', 'Monsterrat', 'Marokko', 'Mozambique', 'Myanmar', 'Namibië',
        'Nauru', 'Nepal', 'Nederlandse Antillen', 'Nederland', 'Nieuw-Caledonië', 'Nieuw-Zeeland', 'Nicaragua',
        'Niger', 'Nigeria', 'Niue', 'Norfolk', 'Noordelijke Marianen', 'Noorwegen', 'Oman', 'Oostenrijk', 'Oeganda',
        'Oekraïne', 'Oezbakistan', 'Pakistan', 'Palau', 'Palestina', 'Panama', 'Papoea-Nieuw-Guinea', 'Paraguay',
        'Peru', 'Filipijnen', 'Pitcairneilanden', 'Polen', 'Portugal', 'Puerto Rico', 'Qatar', 'Réunion', 'Roemenië',
        'Rusland', 'Rwanda', 'Rwanda', 'Sint-Bartholomeus', 'Sint-Helena', 'Saint Kitts en Nevis', 'Saint Lucia',
        'Sint Maarten', 'Saint-Pierre en Miquelon', 'Saint Vincent en de Grenadines', 'Samoa', 'San Marino',
        'Sao Toma en Principe', 'Saoedi-Arabië', 'Senegal', 'Servië', 'Seychellen', 'Sierra Leone', 'Singapore',
        'Slovenië', 'Salomonseilanden', 'Somalië', 'Spanje', 'Sri Lanka', 'Soedan', 'Suriname',
        'Spitsbergen en Jan Mayen', 'Swaziland', 'Zweden', 'Zwitserland', 'Syrië', 'Taiwan', 'Tadzjikistan',
        'Tanzania', 'Thailand', 'Tsjaad', 'Timor-Leste', 'Togo', 'Tokelau-eilanden', 'Tonga', 'Trinidad en Trobago',
        'Tunesië', 'Turkije', 'Turkmenistan', 'Turks- en Caicoseilanden', 'Tuvalu', 'Tsjechische Republiek',
        'Uruguay', 'Vanuatu', 'Venezuela', 'Verenigde Arabische Emiraten', 'Verenigd Koninkrijk',
        'Verenigde Staten van Amerika', 'Vaticaanstad', 'Vietnam', 'Wallis en Futuna', 'Westerlijke Shara',
        'Wit-Rusland', 'Zambia', 'Zuid-Afrika', 'Zuid-Georgia en de Zuidelijke Sandwicheilanden', 'Zimbabwe'
    );

    /**
     * @example 'Gelderland'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }

    /**
     * @see parent
     */
    public function cityName()
    {
        return static::randomElement(static::$cityNames);
    }
}
