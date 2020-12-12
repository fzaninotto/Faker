<?php

namespace Faker\Provider\es_MX;

class Address extends \Faker\Provider\es_ES\Address
{
    protected static $cityPrefix = array('San', 'Ciudad', 'Villa', 'El', 'Santa', 'La', 'Las', 'Asunción', 'Almoloya');
    protected static $citySuffix = array('Sur', 'Norte', 'Juárez', 'del Río', 'el Alto', 'del Valle');
    protected static $buildingNumber = array('###', '##', '#');
    protected static $streetPrefix = array(
        'Calle', 'Avenida', 'Plaza', 'Paseo', 'Camino', 'Andador'
    );
    protected static $postcode = array('#####');
    protected static $state = array(
        'Aguascalientes',
        'Baja California','Baja California Sur',
        'Campeche','Chiapas','Chihuahua','Coahuila','Colima',
        'Distrito Federal','Durango',
        'Estado de México',
        'Guanajuato','Guerrero',
        'Hidalgo',
        'Jalisco',
        'Michoacán','Morelos',
        'Nayarit','Nuevo León',
        'Oaxaca',
        'Puebla',
        'Querétaro','Quintana Roo',
        'San Luis Potosí',
        'Sinaloa','Sonora',
        'Tabasco','Tamaulipas','Tlaxcala',
        'Veracruz',
        'Yucatán',
        'Zacatecas',
    );
    protected static $stateAbbr = array(
        'AS', 'BC', 'BS', 'CC', 'CS', 'CH', 'CL', 'CM', 'DF', 'DG', 'GT', 'GR', 'HG', 'JC', 'MC', 'MN', 'MS', 'NT', 'NL', 'OC', 'PL', 'QO', 'QR', 'SP', 'SL', 'SR', 'TC', 'TS', 'TL', 'VZ', 'YN', 'ZS'
    );
    protected static $cityFormats = array(
        '{{cityPrefix}} {{lastName}} {{citySuffix}}',
        '{{cityPrefix}} {{lastName}}',
        '{{firstName}} {{citySuffix}}',
        '{{lastName}} {{citySuffix}}',
    );
    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{firstName}}',
        '{{streetPrefix}} {{lastName}}'
    );
    protected static $streetAddressFormats = array(
        '{{streetName}}, {{buildingNumber}}',
        '{{streetName}}, {{buildingNumber}}, {{secondaryAddress}}',
    );
    protected static $addressFormats = array(
        '{{streetAddress}}, {{postcode}} {{city}}'
    );
    protected static $secondaryAddressFormats = array('Depto. ###', 'Hab. ###', 'Piso #', 'Piso ##', 'PB A', '# A', '# B', '# C', '# D', '# E', '# F', '## A', '## B', '## C', '## D', '## E', '## F', '# #', '## #', 'Int. #');

    /**
     * @example 'Avenida'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * @example 'Villa'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example '3ºA'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     * @example 'Jalisco'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }
}
