<?php

namespace Faker\Provider\es_BO;

class Address extends \Faker\Provider\es_ES\Address
{
    protected static $cityPrefix = array('');
    protected static $citySuffix = array('');
    protected static $buildingNumber = array('#####', '####', '###', '##', '#');
    protected static $streetPrefix = array('Av.', 'Cl.', 'Urb.');
    protected static $streetSuffix = array('');
    protected static $postcode = array('BOLIVIA ####');
    protected static $state = array(
        'Santa Cruz', 'Beni', 'Pando', 'La Paz', 'Chuquisaca', 'Oruro', 'Tarija', 'Potosi', 'Cochabamba'
    );
    protected static $stateAbbr = array(
        'BO-SC', 'BO-LP', 'BO-BN', 'BO-PA', 'BO-CH', 'BO-OR', 'BO-TJ', 'BO-PT', 'BO-CO',
    );
    protected static $cityFormats = array(
        '{{cityPrefix}} {{firstName}} {{lastName}}',
        '{{cityPrefix}} {{firstName}}',
        '{{firstName}} {{citySuffix}}',
        '{{lastName}} {{citySuffix}}',
    );
    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{firstName}} {{lastName}}',
    );
    protected static $streetAddressFormats = array(
        '{{streetName}} # {{buildingNumber}} ',
        '{{streetName}} # {{buildingNumber}} {{secondaryAddress}}',
    );
    protected static $addressFormats = array(
        "{{streetAddress}}\n{{city}}, {{state}}",
    );
    protected static $secondaryAddressFormats = array('Dpto. ###', 'Hab. ###', 'Piso #', 'Piso ##');

    /**
     * @example ''
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example 'Jr.'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * @example 'Dpto. 402'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     * @example 'Santa Cruz'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }
}
