<?php

namespace Faker\Provider\fa_AF;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = array('ولایت');
    protected static $streetPrefix = array('جاده');
    protected static $buildingNamePrefix = array('ساختمان');
    protected static $buildingNumberPrefix = array('پلاک', 'گذر');
    protected static $postcodePrefix = array('کد پستی');

    protected static $cityName = array("هرات", "کابل", "میدان وردک", "غزنی", "غور", "سرپل", "بلخ", "دایکندی", "بامیان", "جوزجان", "بدخشان", "فراه", "کاپیسا", "خوست", "لغمان", "ننگرهار", "لوگر", "کنر", "پروان", "نیمروز", "بغلان", "کندوز", "بادغیس", "ارزگان", "قندهار", "تخار", "پکتیا", "زابل", "نورستان", "پنجشیر", "سمنگان", "پکتیکا", "فاریاب", "هلمند");

    /**
     * @example 'هرات'
     * @example 'ولایت هرات'
     */
    protected static $cityFormats = array(
        '{{cityName}}',
        '{{cityPrefix}} {{cityName}}',
    );

    /**
     * @example 'ساختمان پوهنتون هرات پلاک 40 کد پستی 51757'
     * @example 'ساختمان پوهنتون هرات افغانستان'
     */
    protected static $addressFormats = array(
        '{{building}} {{postcodePrefix}} {{postcode}}',
        '{{building}} {{country}}',
    );

    /**
     * @example 'ساختمان پوهنتون هرات'
     * @example 'ساختمان پوهنتون هرات پلاک 65'
     * @example 'ساختمان پوهنتون هرات گذر 65'
     */
    protected static $buildingFormat = array(
        '{{buildingNamePrefix}} {{company}} {{buildingNumberPrefix}} {{buildingNumber}}',
        '{{buildingNamePrefix}} {{company}}',
    );

    /**
     * @example 'جاده پوهنتون هرات'
     * @example 'جاده تعلیم و تربیه کابل'
     */
    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{company}}'
    );

    protected static $streetAddressFormats = array(
        '{{streetPrefix}} {{building}}'
    );
    

    protected static $postcode = array('#####');
    protected static $country = array('افغانستان');

    /**
     * @example 'ولایت'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example 'هرات'
     * @example 'کابل'
     */
    public static function cityName()
    {
        return static::randomElement(static::$cityName);
    }

    /**
     * @example 'جاده/خیابان'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
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
     * @example 'ساختمان پوهنتون هرات'
     * @example 'ساختمان پوهنتون هرات پلاک 65'
     * @example 'ساختمان پوهنتون هرات گذر 65'
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
}
