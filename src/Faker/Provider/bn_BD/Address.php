<?php

namespace Faker\Provider\bn_BD;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = array('দক্ষিন', 'পূর্ব', 'পশ্চিম', 'উত্তর', 'নতুন', 'লেইক', 'পোর্ট');
    protected static $citySuffix = array('টাউন', 'তলা', 'হাট', 'খানা');

    protected static $streetNames = array(
        'বরকত', 'হাজী', 'করিমউদ্দিন'
    );

    protected static $streetSuffix = array(
        'তলী', 'গলি', 'চিপা', 'ব্রীজ', 'সড়ক', 'বাইপাস', 'ক্যাম্প',
    );
    protected static $postcode = array('#####', '#####-####');
    protected static $state = array(
        'খুলনা', 'বরিশাল', 'চিটাগং', 'ঢাকা', 'রাজশাহী', 'সিলেট', 'কুমিল্লা'
    );
    protected static $country = array(
        'বাংলাদেশ'
    );
    protected static $cityFormats = array(
        '{{cityPrefix}}{{citySuffix}}',

    );
    protected static $streetNameFormats = array(
        '{{banglaStreetName}} {{streetSuffix}}',

    );
    protected static $streetAddressFormats = array(
        '{{streetNumber}} {{streetName}}',
    );
    protected static $addressFormats = array(
        "{{streetAddress}}, {{city}} {{state}}",
    );

    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    public static function state()
    {
        return static::randomElement(static::$state);
    }

    public static function streetNumber()
    {
        return Utils::getBanglaNumber(static::numberBetween(1, 100));
    }

    public static function banglaStreetName()
    {
        return static::randomElement(static::$streetNames);
    }
}
