<?php

namespace Faker\Provider\id_ID;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = array('Jakarta', 'Bogor', 'Bandung', 'Tangerang', 'Depok', 'Batam', 'Bangka', 'Medan', 'Palembang', 'Semarang', 'Surabaya', 'Yogyakarta', 'Banjarmasin', 'Pontianak', 'Denpasar');
    protected static $citySuffix = array('town', 'ton', 'land', 'ville', 'berg', 'burgh', 'borough', 'bury', 'view', 'port', 'mouth', 'stad', 'furt', 'chester', 'mouth', 'fort', 'haven', 'side', 'shire');
    protected static $buildingNumber = array('#####', '####', '###');
    protected static $streetSuffix = array(
        'Buana', 'Santang', 'Utara', 'Selatan', 'Barat', 'Timur', 'Tengah', 'Dalam', 'Luar', 'Indah', 'Jaya', 'Agung', 'Tirta', 'Surya'
    );
    protected static $postcode = array('#####');
    protected static $state = array(
        'DKI Jakarta', 'Jawa Barat', 'Jawa Tengah', 'DI Yogyakarta', 'Jawa Timur', 'Bali', 'Kalimantan Utara', 'Kalimantan Barat', 'Kalimantan Timur', 'Kalimantan Selatan', 'Sulawesi Utara', 'Sulawesi Tengah', 'Sulawesi Selatan', 'Sumatera Utara', 'Sumatera Barat', 'Sumatera Selatan', 'Lampung'
    );
    protected static $stateAbbr = array(
        'AL', 'AK', 'AS', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'DC', 'FM', 'FL', 'GA', 'GU', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MH', 'MD', 'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND', 'MP', 'OH', 'OK', 'OR', 'PW', 'PA', 'PR', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT', 'VI', 'VA', 'WA', 'WV', 'WI', 'WY', 'AE', 'AA', 'AP'
    );
    protected static $country = array(
        'Indonesia'
    );
    protected static $cityFormats = array(
        '{{cityPrefix}}'
    );
    protected static $streetNameFormats = array(
        '{{firstName}} {{streetSuffix}}',
        '{{lastName}} {{streetSuffix}}'
    );
    protected static $streetAddressFormats = array(
        'Jl. {{streetName}} No. {{buildingNumber}}',
        'Jl. {{streetName}} No. {{buildingNumber}} {{secondaryAddress}}',
    );
    protected static $addressFormats = array(
        "{{streetAddress}}\n{{city}}, {{state}} {{postcode}}",
    );
    protected static $secondaryAddressFormats = array('Cluster #', 'Blok ##');

    /**
     * @example 'East'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example 'Appt. 350'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     * @example 'California'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }

    /**
     * @example 'CA'
     */
    public static function stateAbbr()
    {
        return static::randomElement(static::$stateAbbr);
    }
}
