<?php

namespace Faker\Provider\es_PE;

class Address extends \Faker\Provider\es_ES\Address
{
    protected static $cityPrefix = array('San', 'Puerto', 'Gral.', 'Don');
    protected static $citySuffix = array('Alta', 'Baja', 'Norte', 'Este', ' Sur', ' Oeste');
    protected static $buildingNumber = array('#####', '####', '###', '##', '#');
    protected static $streetPrefix = array('Jr.', 'Av.', 'Cl.', 'Urb.' );
    protected static $streetSuffix = array('');
    protected static $postcode = array('LIMA ##');
    protected static $state = array(
        'Lima', 'Callao', 'Arequipa', 'Cuzco', 'Piura', 'Iquitos', 'Huaraz', 'Tacna', 'Ayacucho', 'Pucallpa', 'Trujillo', 'Chimbote', 'Ica', 'Moquegua', 'Puno', 'Tarapoto', 'Cajamarca', 'Lambayeque', 'Huanuco', 'Jauja', 'Tumbes', 'Madre de Dios'
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
     * @example 'Lima'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }
}
