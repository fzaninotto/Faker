<?php

namespace Faker\Provider\ps_AF;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = array('ښار');
    protected static $streetPrefix = array('کوڅه','سړک');
    protected static $buildingNamePrefix = array('ودانۍ','پلازه');
    protected static $buildingNumberPrefix = array('بلاک');
    protected static $postcodePrefix = array('د پوستې کوډ');

    protected static $cityName = array(
        "جلال اباد", "کابل", "مهترلام", "اسعد اباد", "ښرنه", "مزارشریف", "کندهار",
        "لښکر ګاه", "پلخمری", "زرنج", "کندز", "هرات", "غزني", "بامیان",
        "تالقان", "خوست", "چاریکار", "شبرغان", "سرپل", "میمنه", "چغچران", "میمنه",
        "فراه", "پل علم"
    );

    protected static $cityFormats = array(
        '{{cityName}}',
        '{{cityPrefix}} {{cityName}}',
    );
    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{lastName}}'
    );
    protected static $streetAddressFormats = array(
        '{{streetName}} {{building}}'
    );
    protected static $addressFormats = array(
        '{{city}} {{streetAddress}} {{postcodePrefix}} {{postcode}}',
        '{{city}} {{streetAddress}}'
    );
    protected static $buildingFormat = array(
        '{{buildingNamePrefix}} {{firstName}} {{buildingNumberPrefix}} {{buildingNumber}}',
        '{{buildingNamePrefix}} {{firstName}}'
    );

    protected static $postcode = array('##########');
    protected static $country = array('افغانستان');

    /**
     * @example 'ښار'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example 'جلال اباد'
     */
    public static function cityName()
    {
        return static::randomElement(static::$cityName);
    }

    /**
     * @example 'کوڅه'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * @example 'ودانۍ'
     */
    public static function buildingNamePrefix()
    {
        return static::randomElement(static::$buildingNamePrefix);
    }

    /**
     * @example 'بلاک'
     */
    public static function buildingNumberPrefix()
    {
        return static::randomElement(static::$buildingNumberPrefix);
    }

    /**
     * @example 'د میا عمر پلازه ۳ بلاک'
     */
    public function building()
    {
        $format = static::randomElement(static::$buildingFormat);

        return $this->generator->parse($format);
    }

    /**
     * @example 'د پوستې کود'
     */
    public static function postcodePrefix()
    {
        return static::randomElement(static::$postcodePrefix);
    }
}
