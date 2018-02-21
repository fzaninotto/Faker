<?php

namespace Faker\Provider\bg_BG;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = array('##', 'номер #');
    protected static $cityPrefix = array('град', 'гр.');
    protected static $citySuffix= array('град');

    protected static $postcode = "####";

    protected static $country = array( 'България' );

    protected static $cityFormats = array(
        '{{cityPrefix}} {{lastName}}{{citySuffix}}',
        '{{lastName}}{{citySuffix}}',
    );
    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{name}}'
    );
    protected static $streetAddressFormats = array(
        '{{buildingNumber}} {{streetName}}',
        '{{buildingNumber}} {{streetName}}',
        "{{secondaryAddress}}\n{{streetName}}",
    );
    protected static $addressFormats = array(
        "{{city}}\n{{streetAddress}}\n{{postcode}}",
    );

    protected static $secondaryAddressFormats = array('ап. ##', 'Апартамент ##?', 'ап #');

    /**
     * @example 'гр.'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example 'Апартамент 35a'
     */
    public static function secondaryAddress()
    {
        return static::bothify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     *
     * @example '1000'
     */
    public static function postcode()
    {
        return static::numerify(static::$postcode);
    }
}
