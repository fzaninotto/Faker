<?php

namespace Faker\Provider\fa_IR;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = ['استان'];
    protected static $streetPrefix = ['خیابان'];
    protected static $buildingNamePrefix = ['ساختمان'];
    protected static $buildingNumberPrefix = ['پلاک', 'قطعه'];
    protected static $postcodePrefix = ['کد پستی'];

    protected static $cityName = [
        "آذربایجان شرقی", "آذربایجان غربی", "اردبیل", "اصفهان", "البرز", "ایلام", "بوشهر",
        "تهران", "خراسان جنوبی", "خراسان رضوی", "خراسان شمالی", "خوزستان", "زنجان", "سمنان",
        "سیستان و بلوچستان", "فارس", "قزوین", "قم", "لرستان", "مازندران", "مرکزی", "هرمزگان",
        "همدان", "چهارمحال و بختیاری", "کردستان", "کرمان", "کرمانشاه", "کهگیلویه و بویراحمد",
        "گلستان", "گیلان", "یزد"
    ];

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
        '{{city}} {{streetAddress}}',
    );
    protected static $buildingFormat = array(
        '{{buildingNamePrefix}} {{firstName}} {{buildingNumberPrefix}} {{buildingNumber}}',
        '{{buildingNamePrefix}} {{firstName}}',
    );

    protected static $buildingNumber = array('%#');
    protected static $postcode = array('##########');
    protected static $country = array();

    /**
     * @example 'استان'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example 'زنجان'
     */
    public static function cityName()
    {
        return static::randomElement(static::$cityName);
    }

    /**
     * @example 'استان زنجان'
     */
    public function city()
    {
        $format = static::randomElement(static::$cityFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'خیابان'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * @example 'خیابان لاله'
     */
    public function streetName()
    {
        $format = static::randomElement(static::$streetNameFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'خیابان لاله ساختمان لاله پلاک 24'
     */
    public function streetAddress()
    {
        $format = static::randomElement(static::$streetAddressFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'ساختمان'
     */
    public static function buildingNamePrefix()
    {
        return static::randomElement(static::$buildingNamePrefix);
    }

    /**
     * @example 'پلاک'
     */
    public static function buildingNumberPrefix()
    {
        return static::randomElement(static::$buildingNumberPrefix);
    }

    /**
     * @example '24'
     */
    public static function buildingNumber()
    {
        return static::numerify(static::randomElement(static::$buildingNumber));
    }

    /**
     * @example 'ساختمان آفتاب پلاک 24'
     */
    public function building()
    {
        $format = static::randomElement(static::$buildingFormat);

        return $this->generator->parse($format);
    }

    /**
     * @example 'کد پستی'
     */
    public static function postcodePrefix()
    {
        return static::randomElement(static::$postcodePrefix);
    }

    /**
     * @example 4519752412
     */
    public static function postcode()
    {
        return static::toUpper(static::bothify(static::randomElement(static::$postcode)));
    }

    /**
     * @example 'استان آذربایجان شرقی خیابان لاله ساختمان آفتاب پلاک 24'
     */
    public function address()
    {
        $format = static::randomElement(static::$addressFormats);

        return $this->generator->parse($format);
    }
}
