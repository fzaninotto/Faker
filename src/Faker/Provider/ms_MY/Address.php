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

    /**
     * @link https://ms.wikipedia.org/wiki/Senarai_negara_berdaulat //country list
     */
    protected static $country = array(
        'Abkhazia', 'Afghanistan', 'Afrika Selatan', 'Republik Afrika Tengah', 'Akrotiri dan Dhekelia', 'Albania',
        'Algeria', 'Amerika Syarikat', 'Andorra', 'Angola', 'Antigua dan Barbuda', 'Arab Saudi', 'Argentina', 'Armenia',
        'Australia', 'Austria', 'Azerbaijan',

        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belanda', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bhutan',
        'Bolivia', 'Bonaire', 'Bosnia dan Herzegovina', 'Botswana', 'Brazil', 'Brunei Darussalam', 'Burkina Faso', 'Burundi',

        'Cameroon', 'Chad', 'Chile', 'Republik Rakyat China', 'Republik China di Taiwan', 'Colombia', 'Comoros',
        'Republik Demokratik Congo', 'Republik Congo', 'Kepulauan Cook', 'Costa Rica', 'Côte d\'Ivoire (Ivory Coast)',
        'Croatia', 'Cuba', 'Curaçao', 'Cyprus', 'Republik Turki Cyprus Utara', 'Republik Czech',

        'Denmark', 'Djibouti', 'Dominika', 'Republik Dominika',

        'Ecuador', 'El Salvador', 'Emiriah Arab Bersatu', 'Eritrea','Estonia',

        'Kepulauan Faroe', 'Fiji', 'Filipina', 'Finland',

        'Gabon', 'Gambia', 'Georgia', 'Ghana', 'Grenada', 'Greece (Yunani)', 'Guatemala', 'Guinea', 'Guinea-Bissau',
        'Guinea Khatulistiwa', 'Guiana Perancis', 'Guyana',

        'Habsyah (Etiopia)', 'Haiti', 'Honduras', 'Hungary',

        'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Israel', 'Itali',

        'Jamaika' ,'Jepun','Jerman', 'Jordan',

        'Kanada', 'Kazakhstan', 'Kemboja', 'Kenya', 'Kiribati', 'Korea Selatan', 'Korea Utara', 'Kosovo', 'Kuwait', 'Kyrgyzstan',

        'Laos', 'Latvia', 'Lesotho', 'Liberia', 'Libya' , 'Liechtenstein', 'Lithuania', 'Lubnan', 'Luxembourg',

        'Macedonia', 'Madagaskar', 'Maghribi', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta','Kepulauan Marshall',
        'Mauritania', 'Mauritius', 'Mesir', 'Mexico', 'Persekutuan Micronesia', 'Moldova', 'Monaco', 'Montenegro',
        'Mongolia', 'Mozambique', 'Myanmar',

        'Namibia', 'Nauru', 'Nepal', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norway',

        'Oman', 'Ossetia Selatan',

        'Pakistan', 'Palau', 'Palestin', 'Panama', 'Papua New Guinea', 'Paraguay', 'Perancis', 'Peru', 'Poland', 'Portugal',

        'Qatar',

        'Romania', 'Russia', 'Rwanda',

        'Sahara Barat', 'Saint Kitts dan Nevis', 'Saint Lucia', 'Saint Vincent dan Grenadines', 'Samoa', 'San Marino',
        'São Tomé dan Príncipe', 'Scotland', 'Senegal', 'Sepanyol', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapura',
        'Slovakia', 'Slovenia', 'Kepulauan Solomon', 'Somalia', 'Somaliland', 'Sri Lanka', 'Sudan', 'Sudan Selatan',
        'Suriname', 'Swaziland', 'Sweden', 'Switzerland', 'Syria',

        'Tajikistan', 'Tanjung Verde', 'Tanzania', 'Thailand', 'Timor Leste', 'Togo', 'Tonga', 'Transnistria',
        'Trinidad dan Tobago', 'Tunisia', 'Turki', 'Turkmenistan', 'Tuvalu',

        'Uganda', 'Ukraine', 'United Kingdom', 'Uruguay', 'Uzbekistan',

        'Vanuatu', 'Kota Vatican', 'Venezuela', 'Vietnam',

        'Yaman',
        'Zambia', 'Zimbabwe'
    );
}
