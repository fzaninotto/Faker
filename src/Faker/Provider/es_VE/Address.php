<?php

namespace Faker\Provider\es_VE;

class Address extends \Faker\Provider\es_ES\Address
{
    protected static array $cityPrefix = ['San', 'Santa', 'Puerto', 'Valle', 'Villa', 'Parroquia', 'El', 'Los', 'La', 'Las'];
    protected static array $citySuffix = ['del Valle', 'de Mara', 'de Altagracia', 'de Asis', 'del Tuy', 'de Mata'];
    protected static array $buildingNumber = ['###', '##', '#'];
    protected static array $streetPrefix = [
        'Calle',
        'Avenida',
        'Av.',
        'Cl.',
        'Carretera',
        'Callejón',
        'Vereda',
    ];
    protected static array $streetSuffix = ['Norte', 'Este', ' Sur', ' Oeste'];
    protected static array $postcode = ['####'];
    protected static array $state = [
        'Amazonas',
        'Anzoátegui',
        'Apure',
        'Aragua',
        'Barinas',
        'Bolívar',
        'Carabobo',
        'Cojedes',
        'Delta Amacuro',
        'Distrito Capital',
        'Falcón',
        'Guárico',
        'Lara',
        'Mérida',
        'Miranda',
        'Monagas',
        'Nueva Esparta',
        'Portuguesa',
        'Sucre',
        'Táchira',
        'Trujillo',
        'Vargas',
        'Yaracuy',
        'Zulia',
    ];
    protected static array $cityFormats = [
        '{{cityPrefix}} {{firstName}}{{citySuffix}}',
        '{{cityPrefix}} {{firstName}}',
        '{{firstName}} {{citySuffix}}',
        '{{lastName}} {{citySuffix}}',
    ];
    protected static array $streetNameFormats = [
        '{{streetPrefix}} {{firstName}}',
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} {{firstName}} {{lastName}}',
    ];
    protected static array $streetAddressFormats = [
        '{{streetName}}, {{buildingNumber}}, {{secondaryAddress}}',
        '{{streetName}}, {{secondaryAddress}}',
    ];
    protected static array $addressFormats = [
        '{{streetAddress}}, {{city}} Edo. {{state}}',
        '{{streetAddress}}, {{city}} Edo. {{state}}, {{postcode}}',
    ];
    protected static array $secondaryAddressFormats = ['Nro #', 'Piso #', 'Casa #', 'Hab. #', 'Apto #', 'Nro ##', 'Piso ##', 'Casa ##', 'Hab. ##', 'Apto ##'];

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
    public static function cityPrefix(): string
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example 'Nro 3'
     */
    public static function secondaryAddress(): string
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     * @example 'Aragua'
     */
    public static function state(): string
    {
        return static::randomElement(static::$state);
    }
}
