<?php

namespace Faker\Provider\en_NZ;

class Address extends \Faker\Provider\en_US\Address
{
    /**
     * An array of en_NZ (New Zealand) building number formats.
     */
    protected static array $buildingNumber = ['#', '##', '###'];

    /**
     * An array of en_NZ (New Zealand) street suffixes.
     */
    protected static array $streetSuffix = [
        'Avenue',
        'Close',
        'Court',
        'Crescent',
        'Drive',
        'Esplanade',
        'Grove',
        'Heights',
        'Highway',
        'Hill',
        'Lane',
        'Line',
        'Mall',
        'Parade',
        'Place',
        'Quay',
        'Rise',
        'Road',
        'Square',
        'Street',
        'Terrace',
        'Way',
    ];

    /**
     * City suffixes.
     */
    protected static array $citySuffix = ['ville', 'ston'];

    /**
     * City formats.
     */
    protected static array $cityFormats = ['{{firstName}}{{citySuffix}}'];

    /**
     * An array of en_NZ (New Zealand) regions.
     *
     * @see http://en.wikipedia.org/wiki/Regions_of_New_Zealand
     */
    protected static array $region = [
        'Auckland',
        'Bay of Plenty',
        'Canterbury',
        'Gisborne',
        'Hawkes Bay',
        'Manawatu-Whanganui',
        'Marlborough',
        'Nelson',
        'Northland',
        'Otago',
        'Southland',
        'Taranaki',
        'Tasman',
        'Waikato',
        'Wellington',
        'West Coast',
    ];

    /**
     * An array of en_NZ (New Zealand) poscode formats.
     */
    protected static array $postcode = ['####'];

    /**
     * An array of en_NZ (New Zealand) address formats.
     */
    protected static array $addressFormats = ['{{buildingNumber}} {{streetName}}, {{city}}, {{region}}, {{postcode}}'];

    /**
     * An array of en_NZ (New Zealand) street address formats.
     */
    protected static array $streetAddressFormats = ['{{buildingNumber}} {{streetName}}'];

    /**
     * Return a en_NZ (New Zealand) postcode.
     */
    public static function postcode(): string
    {
        return static::numerify(static::randomElement(static::$postcode));
    }

    /**
     * Return a en_NZ (New Zealand) region.
     */
    public static function region(): string
    {
        return static::randomElement(static::$region);
    }
}
