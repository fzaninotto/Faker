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
        'Kuala Lumpur',
        'Johor',
        'Kedah',
        'Kelantan',
        'Malacca',
        'Negeri Sembilan',
        'Pahang',
        'Perak',
        'Perlis',
        'Penang',
        'Sabah',
        'Sarawak',
        'Selangor',
        'Terengganu'
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_cities_in_Malaysia
     */
    protected static $cityNames = array(
        'George Town',
        'Kuala Lumpur',
        'Ipoh',
        'Kuching',
        'Johor Bahru',
        'Kota Kinabalu',
        'Miri',
        'Shah Alam',
        'Malacca City',
        'Alor Setar',
        'Petaling Jaya',
        'Kuala Terengganu',
        'Kuantan',
        'Seberang Perai',
        'Klang',
        'Subang Jaya',
        'Muar',
        'Tawau',
        'Sandakan',
        'Kota Bharu',
        'Taiping',
        'Sepang',
        'Nilai',
        'Kluang',
        'Alor Gajah',
        'Kulim',
        'Temerloh',
        'Hulu Selangor',
        'Masjid Tanah',
        'Pekan'
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
}
