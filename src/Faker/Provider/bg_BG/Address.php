<?php

namespace Faker\Provider\bg_BG;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = array('##', 'номер #');
    protected static $cityPrefix = 'гр.';
    protected static $citySuffix = array('град');
    protected static $streetPrefix = array('улица', 'ул.');

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

    protected static $secondaryAddressFormats = array('ап. ##', 'Апартамент ##?', 'ап #', 'ет. #, ап. ##');

    /**
     * @example 'гр.'
     */
    public static function cityPrefix()
    {
        return static::$cityPrefix;
    }

    /**
     * @example 'ул.'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
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
