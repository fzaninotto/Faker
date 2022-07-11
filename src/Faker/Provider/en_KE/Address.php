<?php

namespace Faker\Provider\en_KE;

class Address extends \Faker\Provider\Address
{
    protected static $cityFormats = array(

        '{{cityName}}',
    );

    protected static $addressFormats = array(
        'P.O. BOX {{postcode}} {{county}}',
    );

    /**
     * Kenya has got only three cities
     */
    protected static $city = array('Nairobi','Mombasa','Kisumu');

    /**
     * Counties found in Kenya
     * @see https://en.wikipedia.org/wiki/List_of_cities_and_towns_in_Kenya_by_population
     */
    protected static $county = array(

        'Baringo','Bomet','Bungoma','Busia','Elgeyo-marakwet',
        'Embu','Garissa','Homabay','Isiolo','Kajiado','Kakamega',
        'Kericho','Kiambu','Kilifi','Kirinyaga','Kisii','Kisumu',
        'Kitui','Kwale','Laikipia','Lamu','Machakos','Makueni',
        'Mandera','Marsabit','Meru','Migori','Mombasa','Murang\'a',
        'Nairobi','Nakuru','Nandi','Narok','Nyamira','Nyandarua',
        'Nyeri','Samburu','Siaya','Taita Taveta','Tana River',
        'Tharaka-Nithi','Trans-Nzoia','Turkana','Uasin Gishu',
        'Vihiga','Wajir','West Pokot',
    );

    /**
     * Municipalities in Kenya
     * @see https://en.wikipedia.org/wiki/List_of_cities_and_towns_in_Kenya_by_population
     */
    protected static $municipality = array(

        'Nakuru','Eldoret','Kehancha','Ruiru','Malindi','Naivasha',
        'Kitui','Machakos','Thika','Athi River (Mavoko)','Nyeri',
        'Vihiga','Wote','Mumias','Bomet','Kitale','Limuru','Kericho',
        'Kimilili','Kakamega','Kapsabet','Kiambu','Kisii','Bungoma',
        'Webuye','Busia','Runyenjes','Migori','Embu','Homabay','Lodwar',
        'Meru','Nyahururu','Nanyuki','Maua','Voi','Siaya','Chuka',
        'Kerugoya / Kutus',
    );

    protected static $country = array(
        'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra',
        'Angola', 'Anguilla', 'Antarctica (the territory South of 60 deg S)',
        'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia',
        'Austria', 'Azerbaijan','Bahamas', 'Bahrain', 'Bangladesh', 'Barbados',
        'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia',
        'Bosnia and Herzegovina', 'Botswana', 'Bouvet Island (Bouvetoya)',
        'Brazil', 'British Indian Ocean Territory (Chagos Archipelago)',
        'British Virgin Islands', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso',
        'Burundi','Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands',
        'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island',
        'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo', 'Congo',
        'Cook Islands', 'Costa Rica', 'Cote d\'Ivoire', 'Croatia', 'Cuba', 'Cyprus',
        'Czech Republic','Denmark', 'Djibouti', 'Dominica', 'Dominican Republic',
        'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia',
        'Faroe Islands', 'Falkland Islands (Malvinas)', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia',
        'French Southern Territories','Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece',
        'Greenland','Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard Island and McDonald Islands', 'Holy See (Vatican City State)', 'Honduras', 'Hong Kong',
        'Hungary','Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy',
        'Jamaica', 'Japan', 'Jersey', 'Jordan','Kazakhstan', 'Kenya', 'Kiribati', 'Korea', 'Korea',
        'Kuwait', 'Kyrgyz Republic','Lao People\'s Democratic Republic', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia',
        'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lithuania', 'Luxembourg','Macao',
        'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique',
        'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro',
        'Montserrat', 'Morocco', 'Mozambique', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Netherlands Antilles', 'Netherlands', 'New Caledonia', 'New Zealand', 'Nicaragua',
        'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway','Oman',
        'Pakistan', 'Palau', 'Palestinian Territories', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines',
        'Pitcairn Islands', 'Poland', 'Portugal', 'Puerto Rico','Qatar',
        'Reunion', 'Romania', 'Russian Federation', 'Rwanda',
        'Saint Barthelemy', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Martin',
        'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe',
        'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia (Slovak Republic)',
        'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Georgia and the South Sandwich Islands',
        'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard & Jan Mayen Islands', 'Swaziland', 'Sweden', 'Switzerland',
        'Syrian Arab Republic','Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tokelau',
        'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu',
        'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America',
        'United States Minor Outlying Islands', 'United States Virgin Islands', 'Uruguay', 'Uzbekistan',
        'Vanuatu', 'Venezuela', 'Vietnam','Wallis and Futuna', 'Western Sahara','Yemen','Zambia', 'Zimbabwe'
    );

    /**
     * Towns found in Kenya
     * @see https://en.wikipedia.org/wiki/List_of_cities_and_towns_in_Kenya_by_population
     */
    public static $town = array(

        'Kikuyu','Kangundo - tala','Karuri','Kilifi','Garissa','Molo','Litein','Mariakani',
        'Mandera','Nyamira','Mwingi','Rongo','Ahero','Nandi Hills','Makuyu','Kapenguria',
        'Taveta','Narok','Ol-Kalou','Malaba','Mbita Point','Malava','Suneka','Ogembo',
        'Ukwala','Keroka','Matuu','Oyugis','Kipkelion','Luanda','Eldama Ravine','Nyansiongo',
        'Londiani','Iten / Tambach','Malakisi','Bondo','Maralal','Nambale','Tabaka','Muhoroni',
        'Ugunja','Yala','Rumuruti','Burnt Forest','Maragua','Kendu Bay',
    );

    /**
     * Centers in Kenya
     * @see https://en.wikipedia.org/wiki/List_of_cities_and_towns_in_Kenya_by_population
     */
    public static $center = array(

        'Ngong','Awasi','Wajir','Kakuma','Ukunda','Wundanyi','Kitengela','Mtwapa',
        'Isiolo','Juja','Ongata Rongai','Moyale','Gilgil'
    );

    /**
     * Streets in Kenya (Partial list for Nairobi only)
     */
    public static $street = array(

        'Moi Avenue','Kenyatta Avenue','Haile Sellasie Avenue',
        'Muindi Mbingu Street','Tom Mboya Street','Ramesh Gautama Road','University Way',
        'Luthuli Avenue','River Road','Taveta Road','Nyerere Road',
        'Mombasa Road','Koinange Street','Parliament Road','Race Course Road','Lang\'ata Road',
        'Uhuru Highway','Mama Ngina Street','Biashara Street','Kijabe Street','Mamlaka Road','Dorobo Road',
        'Arboretum Drive','Kivemia Rd','State House Road','Lower State House Rd','Utalii Street','Loita Street',
        'Market Street','Njugu Lane','Banda Street','Posta Street','Kaunda Street','City Hall Way','Harambee Avenue',
        'Tumbo Avenue','Parliament Lane','Valley Road','Ragati Road','Chiromo Lane',
    );

    /**
     * Get Counties in Kenya
     * @example Kajiado
     */
    public static function county()
    {
        return static::randomElement(static::$county);
    }

    /**
     * Get municipalities in Kenya
     * @example Nakuru
     */
    public static function municipality()
    {
        return static::randomElement(static::$municipality);
    }

    /**
     * Get towns in Kenya
     * @example Garissa
     */
    public static function town()
    {
        return static::randomElement(static::$town);
    }

    /**
     * Get street name in Kenya
     * @example Moi Avenue
     */
    public static function street()
    {
        return static::randomElement(static::$street);
    }

    /**
     * Get town centers in Kenya
     * @example Kitengela
     */
    public static function center()
    {
        return static::randomElement(static::$center);
    }

    /**
     * Get cities in Kenya
     * @example Nairobi
     */
    public static function cityName()
    {
        return static::randomElement(static::$city);
    }
}
