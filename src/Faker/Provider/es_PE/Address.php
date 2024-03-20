<?php

namespace Faker\Provider\es_PE;

class Address extends \Faker\Provider\es_ES\Address
{
    protected static array $cityPrefix = ['San', 'Puerto', 'Gral.', 'Don'];
    protected static array $citySuffix = ['Alta', 'Baja', 'Norte', 'Este', ' Sur', ' Oeste'];
    protected static array $buildingNumber = ['#####', '####', '###', '##', '#'];
    protected static array $streetPrefix = ['Jr.', 'Av.', 'Cl.', 'Urb.'];
    protected static array $streetSuffix = [''];
    protected static array $postcode = ['LIMA ##'];
    protected static array $state = [
        'Lima',
        'Callao',
        'Arequipa',
        'Cuzco',
        'Piura',
        'Iquitos',
        'Huaraz',
        'Tacna',
        'Ayacucho',
        'Pucallpa',
        'Trujillo',
        'Chimbote',
        'Ica',
        'Moquegua',
        'Puno',
        'Tarapoto',
        'Cajamarca',
        'Lambayeque',
        'Huanuco',
        'Jauja',
        'Tumbes',
        'Madre de Dios',
    ];
    protected static array $cityFormats = [
        '{{cityPrefix}} {{firstName}} {{lastName}}',
        '{{cityPrefix}} {{firstName}}',
        '{{firstName}} {{citySuffix}}',
        '{{lastName}} {{citySuffix}}',
    ];
    protected static array $streetNameFormats = [
        '{{streetPrefix}} {{firstName}} {{lastName}}',
    ];
    protected static array $streetAddressFormats = [
        '{{streetName}} # {{buildingNumber}} ',
        '{{streetName}} # {{buildingNumber}} {{secondaryAddress}}',
    ];
    protected static array $addressFormats = [
        "{{streetAddress}}\n{{city}}, {{state}}",
    ];
    protected static array $secondaryAddressFormats = ['Dpto. ###', 'Hab. ###', 'Piso #', 'Piso ##'];

    /**
     * @example ''
     */
    public static function cityPrefix(): string
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
    public static function secondaryAddress(): string
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     * @example 'Lima'
     */
    public static function state(): string
    {
        return static::randomElement(static::$state);
    }
}
