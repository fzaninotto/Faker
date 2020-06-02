<?php

namespace Faker\Provider\es_CL;

class Address extends \Faker\Provider\es_ES\Address
{
    protected static $streetPrefix = array('Pasaje', 'Av.', 'Calle ' );
    protected static $streetSuffix = array('');
    protected static $state = array(
       'Arica y Parinacota',
       'Tarapacá',
       'Antofagasta',
       'Atacama',
       'Coquimbo',
       'Valparaiso',
       'Metropolitana de Santiago',
       'Libertador General Bernardo O\'Higgins',
       'Maule',
       'Biobío',
       'La Araucanía',
       'Los Ríos',
       'Los Lagos',
       'Aisén del General Carlos Ibáñez del Campo',
       'Magallanes y de la Antártica Chilena'
    );

    protected static $stateAbbr = array(
        'XV',
        'I',
        'II',
        'III',
        'IV',
        'V',
        'RM',
        'VI',
        'VII',
        'VIII',
        'IX',
        'XIV',
        'X',
        'XI',
        'XII'
                
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
     * @example 'Antofagasta'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }
}
