<?php

namespace Faker\Provider\ms_MY;

class Address extends \Faker\Provider\Address
{

    /**
     * @link https://en.wikipedia.org/wiki/List_of_roads_in_Kuala_Lumpur#Major_roads
     */
    protected static $streetNames = array(
        'Jalan Ampang',
        'Jalan Bangsar',
        'Jalan Bukit Bintang',
        'Jalan Semarang',
        'Jalan Chow Kit',
        'Jalan Cochrane',
        'Jalan Cheng Lock',
        'Jalan Damansara',
        'Jalan Dang Wangi',
        'Jalan Dewan Bahasa',
        'Jalan Esfahan',
        'Jalan Hang Jebat',
        'Jalan Hang Kasturi',
        'Jalan Hang Lekir',
        'Jalan Hang Lekiu',
        'Jalan Kinabalu',
        'Jalan Imbi',
        'Jalan Hang Tuah',
        'Jalan Maharajalela',
        'Lebuh Pasar Besar',
        'Medan Pasar Besar',
        'Jalan Raja Chulan',
        'Jalan Sultan Ismail',
        'Jalan Bukit Ubi',
        'Jalan Tun H S Lee',
        'Jalan Yap Kwan Seng'
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_roads_in_Kuala_Lumpur#Standard_translations
     */
    protected static $streetSuffix = array(
        'Jalan', 'Persiaran', 'Taman', 'Lorong', 'Medan', 'Lebuh'
    );

    /**
     * @link https://en.wikipedia.org/wiki/Postal_codes_in_Malaysia
     */
    protected static $postcode = array(
        '40###',
        '48###',
        '62###',
        '64###',
        '20###',
        '24###',
        '93###',
        '98###',
        '88###',
        '89###',
        '90###',
        '02###',
        '09###',
        '05###',
        '15###',
        '18###',
        '70###',
        '71###',
        '73###',
        // Perlis
        '01###',
        // Perak
        '30###',
        '36###',
        // Pahang
        '25###',
        '27###',
        '39###',
        '49###',
        '69###'
    );

    /**
     * States of Malaysia
     * @link https://simple.wikipedia.org/wiki/States_of_Malaysia
     */
    protected static $state = array(
        'Johor',
        'Kedah',
        'Kelantan',
        'Kuala Lumpur',
        'Malacca',
        'Negeri Sembilan',
        'Pahang',
        'Perak',
        'Penang',
        'Perlis',
        'Sabah',
        'Sarawak',
        'Selangor',
        'Terengganu'
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_cities_in_Malaysia
     */
    protected static $cityNames = array(
        'Alor Gajah',
        'Alor Setar',
        'George Town',
        'Hulu Selangor',
        'Ipoh',
        'Johor Bahru',
        'Klang',
        'Kluang',
        'Kota Bharu',
        'Kota Kinabalu',
        'Kuala Lumpur',
        'Kuala Terengganu',
        'Kuantan',
        'Kuching',
        'Kulim',
        'Malacca City',
        'Masjid Tanah',
        'Miri',
        'Muar',
        'Nilai',
        'Pekan',
        'Petaling Jaya',
        'Sandakan',
        'Seberang Perai',
        'Sepang',
        'Shah Alam',
        'Subang Jaya',
        'Taiping',
        'Tawau',
        'Temerloh'
    );

    protected static $streetAddressFormats = array(
        '{{streetNumber}} {{streetName}}',
    );

    /**
     * @link http://www.bitboost.com/ref/international-address-formats/malaysia/
     */
    protected static $addressFormats = array(
        "{{streetAddress}}\n{{postcode}} {{city}}\n{{state}}\nMalaysia",
    );

    /**
     * @example Pahang
     */
    public function state()
    {
        $format = static::randomElement(static::$state);
        return $this->generator->parse($format);
    }

    public function address()
    {
        $format = static::randomElement(static::$addressFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example Kuantan
     */
    public function city()
    {
        $format = static::randomElement(static::$cityNames);

        return $this->generator->parse($format);
    }

    public static function streetNumber()
    {
        return static::numberBetween(1, 99);
    }

    public function streetName()
    {
        $format = static::randomElement(static::$streetNames);

        return $this->generator->parse($format);
    }

    protected static $country = array(
        'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antarctica (the territory South of 60 deg S)', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Bouvet Island (Bouvetoya)', 'Brazil', 'British Indian Ocean Territory (Chagos Archipelago)', 'British Virgin Islands', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi',
        'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo', 'Cook Islands', 'Costa Rica', 'Cote d\'Ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic',
        'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic',
        'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia',
        'Faroe Islands', 'Falkland Islands (Malvinas)', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'French Southern Territories',
        'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard Island and McDonald Islands', 'Holy See (Vatican City State)', 'Honduras', 'Hong Kong', 'Hungary',
        'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy',
        'Jamaica', 'Japan', 'Jersey', 'Jordan',
        'Kazakhstan', 'Kenya', 'Kiribati', 'Korea', 'Korea', 'Kuwait', 'Kyrgyz Republic',
        'Lao People\'s Democratic Republic', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lithuania', 'Luxembourg',
        'Macao', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Netherlands Antilles', 'Netherlands', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway',
        'Oman',
        'Pakistan', 'Palau', 'Palestinian Territory', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn Islands', 'Poland', 'Portugal', 'Puerto Rico',
        'Qatar',
        'Reunion', 'Romania', 'Russian Federation', 'Rwanda',
        'Saint Barthelemy', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Martin', 'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia (Slovak Republic)', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Georgia and the South Sandwich Islands', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard & Jan Mayen Islands', 'Swaziland', 'Sweden', 'Switzerland', 'Syrian Arab Republic',
        'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu',
        'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America', 'United States Minor Outlying Islands', 'United States Virgin Islands', 'Uruguay', 'Uzbekistan',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Wallis and Futuna', 'Western Sahara',
        'Yemen',
        'Zambia', 'Zimbabwe'
    );
}
