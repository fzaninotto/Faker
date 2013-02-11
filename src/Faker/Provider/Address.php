<?php

namespace Faker\Provider;

class Address extends \Faker\Provider\Base
{
    protected static $citySuffix = array('Ville');
    protected static $streetSuffix = array('Street');
    protected static $cityFormats = array(
        '{{firstName}}{{citySuffix}}',
    );
    protected static $streetNameFormats = array(
        '{{lastName}} {{streetSuffix}}'
    );
    protected static $streetAddressFormats = array(
        '{{buildingNumber}} {{streetName}}'
    );
    protected static $addressFormats = array(
        '{{streetAddress}} {{postcode}} {{city}}',
    );

    protected static $buildingNumber = array('##');
    protected static $postcode = array('#####');
    protected static $country = array();

    /**
     * @example 'town'
     */
    public static function citySuffix()
    {
        return static::randomElement(static::$citySuffix);
    }

    /**
     * @example 'Avenue'
     */
    public static function streetSuffix()
    {
        return static::randomElement(static::$streetSuffix);
    }

    /**
     * @example '791'
     */
    public static function buildingNumber()
    {
        return static::numerify(static::randomElement(static::$buildingNumber));
    }

    /**
     * @example 'Sashabury'
     */
    public function city()
    {
        $format = static::randomElement(static::$cityFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Crist Parks'
     */
    public function streetName()
    {
        $format = static::randomElement(static::$streetNameFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example '791 Crist Parks'
     */
    public function streetAddress()
    {
        $format = static::randomElement(static::$streetAddressFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example 86039-9874
     */
    public static function postcode()
    {
        return static::toUpper(static::bothify(static::randomElement(static::$postcode)));
    }

    /**
     * @example '791 Crist Parks, Sashabury, IL 86039-9874'
     */
    public function address()
    {
        $format = static::randomElement(static::$addressFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Japan'
     */
    public static function country()
    {
        return static::randomElement(static::$country);
    }

    /**
     * @example '77.147489'
     */
    public static function latitude()
    {
        return number_format(mt_rand(-90000000, 90000000)/1000000, 6);
    }

    /**
     * @example '86.211205'
     */
    public static function longitude()
    {
        return number_format(mt_rand(-180000000, 180000000)/1000000, 6);
    }
}
