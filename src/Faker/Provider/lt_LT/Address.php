<?php

namespace Faker\Provider\lt_LT;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = array('miestas');

    protected static $regionSuffix = array('apskritis');
    protected static $subRegionSuffix = array('savivaldybė');
    protected static $streetPrefix = array(
        'gatvė', 'gatvė', 'gatvė', 'gatvė', 'g', 'g', 'bulvaras', 'prospektas', 'pr', 'skveras',
    );

    protected static $buildingNumber = array('##');
    protected static $postcode = array('LT ####');
    protected static $country = array(
        'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla',
        'Antarctica (the territory South of 60 deg S)', 'Antigua and Barbuda', 'Argentina', 'Armenia',
        'Aruba', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados',
        'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina',
        'Botswana', 'Bouvet Island (Bouvetoya)', 'Brazil', 'British Indian Ocean Territory (Chagos Archipelago)',
        'British Virgin Islands', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi',
        'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic',
        'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros',
        'Congo', 'Congo', 'Cook Islands', 'Costa Rica', 'Cote d\'Ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic',
        'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic',
        'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia',
        'Faroe Islands', 'Falkland Islands (Malvinas)', 'Fiji', 'Finland', 'France', 'French Guiana',
        'French Polynesia', 'French Southern Territories',
        'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada',
        'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard Island and McDonald Islands', 'Holy See (Vatican City State)',
        'Honduras', 'Hong Kong', 'Hungary',
        'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy',
        'Jamaica', 'Japan', 'Jersey', 'Jordan',
        'Kazakhstan', 'Kenya', 'Kiribati', 'Korea', 'Korea', 'Kuwait', 'Kyrgyz Republic',
        'Lao People\'s Democratic Republic', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya',
        'Liechtenstein', 'Lithuania', 'Luxembourg',
        'Macao', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands',
        'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia',
        'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Netherlands Antilles', 'Netherlands', 'New Caledonia', 'New Zealand',
        'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway',
        'Oman',
        'Pakistan', 'Palau', 'Palestinian Territory', 'Panama', 'Papua New Guinea', 'Paraguay',
        'Peru', 'Philippines', 'Pitcairn Islands', 'Poland', 'Portugal', 'Puerto Rico',
        'Qatar',
        'Reunion', 'Romania', 'Russian Federation', 'Rwanda',
        'Saint Barthelemy', 'Saint Helena', 'Saint Kitts and Nevis',
        'Saint Lucia', 'Saint Martin', 'Saint Pierre and Miquelon',
        'Saint Vincent and the Grenadines', 'Samoa', 'San Marino',
        'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia',
        'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia (Slovak Republic)',
        'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa',
        'South Georgia and the South Sandwich Islands', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname',
        'Svalbard & Jan Mayen Islands', 'Swaziland', 'Sweden', 'Switzerland', 'Syrian Arab Republic',
        'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga',
        'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu',
        'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America',
        'United States Minor Outlying Islands', 'United States Virgin Islands', 'Uruguay', 'Uzbekistan',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Wallis and Futuna', 'Western Sahara',
        'Yemen',
        'Zambia', 'Zimbabwe'
    );

    protected static $region = array(
        'Alytaus', 'Kauno', 'Klaipėdos', 'Marijampolės', 'Panevėžio', 'Šiaulių', 'Tauragės',
        'Telšių', 'Utenos', 'Vilniaus'
    );

    protected static $subRegionMap = array(
        'Alytaus' => array(
            'Alytaus miesto', 'Alytaus rajono', 'Druskininkų', 'Lazdijų rajono', 'Varėnos rajono'
        ),
        'Kauno' => array(
            'Birštono', 'Jonavos rajono', 'Kaišiadorių rajono', 'Kauno miesto', 'Kauno rajono', 'Kėdainių rajono',
            'Prienų rajono', 'Raseinių rajono'
        ),
        'Klaipėdos' => array(
            'Klaipėdos miesto', 'Klaipėdos rajono', 'Kretingos rajono', 'Neringos', 'Palangos miesto', 'Šilutės rajono',
            'Skuodo rajono'
        ),
        'Marijampolės' => array(
            'Kalvarijos', 'Kazlų Rūdos', 'Marijampolės', 'Šakių rajono', 'Vilkaviškio rajono'
        ),
        'Panevėžio' => array(
            'Panevėžio miesto', 'Panevėžio rajono', 'Kupiškio rajono', 'Pasvalio rajono',
            'Rokiškio rajono', 'Biržų rajono'
        ),
        'Šiaulių' => array(
            'Akmenės rajono', 'Joniškio rajono', 'Kelmės rajono', 'Pakruojo rajono', 'Radviliškio rajono',
            'Šiaulių miesto', 'Šiaulių rajono'
        ),
        'Tauragės' => array(
            'Jurbarko rajono', 'Pagėgių', 'Šilalės rajono', 'Tauragės rajono'
        ),
        'Telšių' => array(
            'Mažeikių rajono', 'Plungės rajono', 'Rietavo', 'Telšių rajono'
        ),
        'Utenos' => array(
            'Anykščių rajono', 'Ignalinos rajono', 'Molėtų rajono', 'Utenos rajono', 'Visagino', 'Zarasų rajono'
        ),
        'Vilniaus' => array(
            'Elektrėnų', 'Šalčininkų rajono', 'Širvintų rajono', 'Švenčionių rajono', 'Trakų rajono',
            'Ukmergės rajono', 'Vilniaus miesto', 'Vilniaus rajono'
        )
    );

    protected static $city = array(
        "Akmenė", "Alytus", "Anykščiai", "Ariogala", "Baltoji Vokė", "Birštonas", "Biržai", "Daugai", "Druskininkai",
        "Dūkštas", "Dusetos", "Eišiškės", "Elektrėnai", "Ežerėlis", "Gargždai", "Garliava", "Gelgaudiškis",
        "Grigiškės", "Ignalina", "Jieznas", "Jonava", "Joniškėlis", "Joniškis", "Jurbarkas", "Kaišiadorys",
        "Kalvarija", "Kaunas", "Kavarskas", "Kazlų Rūda", "Kėdainiai", "Kelmė", "Kybartai", "Klaipėda", "Kretinga",
        "Kudirkos Naumiestis", "Kupiškis", "Kuršėnai", "Lazdijai", "Lentvaris", "Linkuva", "Marijampolė",
        "Mažeikiai", "Molėtai", "Naujoji Akmenė", "Nemenčinė", "Neringa", "Nida", "Obeliai", "Pabradė", "Pagėgiai",
        "Pakruojis", "Palanga", "Pandėlys", "Panemunė", "Panevėžys", "Pasvalys", "Plungė", "Priekulė",
        "Prienai", "Radviliškis", "Ramygala", "Raseiniai", "Rietavas", "Rokiškis", "Rūdiškės", "Salantai", "Seda",
        "Simnas", "Skaudvilė", "Skuodas", "Smalininkai", "Subačius", "Šakiai", "Šalčininkai", "Šeduva",
        "Šiauliai", "Šilalė", "Šilutė", "Širvintos", "Švenčionėliai", "Švenčionys", "Tauragė", "Telšiai", "Tytuvėnai",
        "Trakai", "Troškūnai", "Ukmergė", "Utena", "Užventis", "Vabalninkas", "Varėna", "Varniai", "Veisiejai",
        "Venta", "Viekšniai", "Vievis", "Vilkaviškis", "Vilkija", "Vilnius", "Virbalis", "Visaginas", "Zarasai",
        "Žagarė", "Žiežmariai"
    );

    protected static $street = array(
        'Martyno Yčo', 'A. Domaševičiaus', 'A. Gelgaudo', 'A. Goštauto', 'Alksnyno', 'Alkūnės', 'Alnos', 'Alšėnų',
        'Aludarių', 'Amatų', 'Anapilio', 'Angelavos', 'Anglų', 'Anykščių', 'Ankštoji', 'Antakalnio', 'Antanerės',
        'Antano Baranausko', 'Antano Gudaičio', 'Antano Juškos', 'Antano Krutulio', 'Antano Maceinos', 'Antano Mikėno',
        'Antano Musteikio', 'Antano Salio', 'Antano Škėmos', 'Antano Tumėno', 'Antavilių', 'Bajorų Kelio 3-ioji',
        'Bajorų Kelio 4-oji', 'Bajorų Sodų', 'Bajorų Sodų 1-oji', 'Bajorų Sodų 10-oji', 'Bajorų Sodų 11-oji',
        'Bajorų Sodų 12-oji', 'Bajorų Sodų 13-oji', 'Kelmijos Sodų 42-oji', 'Kelmijos Sodų 43-ioji',
        'Kelmijos Sodų 44-oji', 'Kelmijos Sodų 45-oji', 'Kelmijos Sodų 46-oji', 'Kelmijos Sodų 47-oji',
        'Kelmijos Sodų 48-oji', 'S/B "Medicinos darbuotojai"', 'Šaltupio', 'Šarkytės', 'Šarkų', 'Šarkuvos',
        'Šarmos', 'Šatrijos', 'Šatrijos Raganos', 'Šatrininkų', 'Šaulio', 'Šeimyniškių', 'Šerkšno', 'Šermukšnių',
        'Šernų', 'Uosių Sodų 9-oji', 'Upės', 'Upėtakių', 'Upytės', 'Urėdų', 'Utenos', 'Užkiemio',
        'Užkiemio Sodo 1-oji', 'Užpalių', 'Užtvankos', 'Užupio', 'Užusienio', 'Užutėkio', 'V. A. Graičiūno',
        'Vinciūniškių Sodų 12-oji', 'Vinciūniškių Sodų 13-oji', 'Vinciūniškių Sodų 14-oji',
        'Vinciūniškių Sodų 15-oji', 'Vinciūniškių Sodų 16-oji', 'Vinciūniškių Sodų 17-oji',
        'Vinciūniškių Sodų 18-oji', 'Vinciūniškių Sodų 19-oji', 'Vinciūniškių Sodų 2-oji', 'Vinciūniškių Sodų 20-oji',
        'Vinciūniškių Sodų 21-oji', 'Vinciūniškių Sodų 22-oji', 'Žvaigždikių', 'Žvalgų', 'Žvejų', 'Žvelgaičio',
        'Žvirblių', 'Žvirgždyno'
    );

    protected static $addressFormats = array(
        "{{street}} {{streetPrefix}}. {{buildingNumber}}, {{postcode}}, {{city}}",
    );

    public static function buildingNumber()
    {
        return static::numerify(static::randomElement(static::$buildingNumber));
    }

    public static function country()
    {
        return static::randomElement(static::$country);
    }

    public static function postcode()
    {
        return static::toUpper(static::bothify(static::randomElement(static::$postcode)));
    }

    public static function subRegionSuffix()
    {
        return static::randomElement(static::$subRegionSuffix);
    }

    public static function regionSuffix()
    {
        return static::randomElement(static::$regionSuffix);
    }

    public static function subRegion()
    {
        return static::randomElement(self::$subRegionMap[static::randomElement(static::$region)]);
    }

    public static function region()
    {
        return static::randomElement(static::$region);
    }

    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    public static function street()
    {
        return static::randomElement(static::$street);
    }

    public function address()
    {
        $format = static::randomElement(static::$addressFormats);

        return $this->generator->parse($format);
    }

    public function city()
    {
        return static::randomElement(static::$city);
    }
}
