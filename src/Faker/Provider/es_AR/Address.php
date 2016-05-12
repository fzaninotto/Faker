<?php

namespace Faker\Provider\es_AR;

class Address extends \Faker\Provider\es_ES\Address
{
    protected static $cityPrefix = array('San', 'Puerto', 'Villa', 'Gral.', 'Don');
    protected static $citySuffix = array('del Mar', 'del Norte', 'del Este', 'del Sur', 'del Oeste', 'del Mirador');
    protected static $buildingNumber = array('#####', '####', '###', '##', '#');
    protected static $streetSuffix = array('');
    protected static $postcode = array('####', '#####');
    protected static $state = array(
        'Buenos Aires', 'Catamarca', 'Chaco', 'Chubut', 'Córdoba', 'Corrientes', 'Entre Ríos', 'Formosa', 'Jujuy', 'La Pampa', 'La Rioja', 'Mendoza', 'Misiones', 'Neuquén', 'Río Negro', 'Salta', 'San Juan', 'San Luis', 'Santa Cruz', 'Santa Fe', 'Santiago del Estero', 'Tierra del Fuego, Antártida e Islas del Atlántico Sur', 'Tucumán'
    );
    protected static $stateAbbr = array(
        'AR-B', 'AR-K', 'AR-H', 'AR-U', 'AR-X', 'AR-W', 'AR-E', 'AR-P', 'AR-Y', 'AR-L', 'AR-F', 'AR-M', 'AR-N', 'AR-Q', 'AR-R', 'AR-A', 'AR-J', 'AR-D', 'AR-Z', 'AR-S', 'AR-G', 'AR-V', 'AR-T'
    );
    protected static $cityFormats = array(
        '{{cityPrefix}} {{firstName}} {{citySuffix}}',
        '{{cityPrefix}} {{firstName}}',
        '{{firstName}} {{citySuffix}}',
        '{{lastName}} {{citySuffix}}',
    );
    protected static $streetNameFormats = array(
        '{{firstName}} {{streetSuffix}}',
        '{{lastName}} {{streetSuffix}}'
    );
    protected static $streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} {{buildingNumber}} {{secondaryAddress}}',
    );
    protected static $addressFormats = array(
        "{{streetAddress}}\n{{city}}, {{stateAbbr}} {{postcode}}",
    );
    protected static $secondaryAddressFormats = array('Depto. ###', 'Hab. ###', 'Piso #', 'Piso ##', 'PB A', '# A', '# B', '# C', '# D', '# E', '# F', '## A', '## B', '## C', '## D', '## E', '## F', '# #', '## #');

    /**
     * @example 'San'
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
     * @example 'Buenos Aires'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }

    /**
     * @example 'AR-B'
     */
    public static function stateAbbr()
    {
        return static::randomElement(static::$stateAbbr);
    }
}
