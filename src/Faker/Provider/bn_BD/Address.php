<?php

namespace Faker\Provider\bn_BD;

use Faker\Provider\bn_BD\Utils;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = array('দক্ষিন', 'পূর্ব', 'পশ্চিম', 'উত্তর', 'নতুন', 'লেইক', 'পোর্ট');
    protected static $citySuffix = array('টাউন', 'তলা', 'হাট', 'খানা', 'পুর');

    protected static $streetNames = array(
        'বরকত', 'হাজী', 'করিমউদ্দিন', 'হাজীউদ্দীন'
    );

    protected static $streetSuffix = array(
        'তলী', 'গলি', 'চিপা', 'ব্রীজ', 'সড়ক', 'বাইপাস', 'ক্যাম্প',
    );
    protected static $postcode = array('১০০০', '১২০০', '১০০০', '১০১২', '১২১৬', '১২১৫');
    protected static $state = array(
        'খুলনা', 'বরিশাল', 'চিটাগং', 'ঢাকা', 'রাজশাহী', 'সিলেট', 'কুমিল্লা', 'প্রযোজ্য নয়', 'রংপুর'
    );
    protected static $country = array(
        'বাংলাদেশ', 'আমেরিকা', 'যুক্তরাজ্য', 'যুক্তরাষ্ট্র', 'কানাডা', 'অসট্রেলিয়া', 'ভারত', 'পাকিস্তান', 'শ্রীলংকা',
        'মালদ্বীপ', 'সিংগাপুর', 'মালেশিয়া', 'চীন', 'রাশিয়া', 'কোরিয়া', 'উত্তর কোরিয়া', 'দক্ষিণ কোরিয়া',
        'উত্তর কোরিয়া', 'মিশর', 'ফিলিস্তিন', 'আরব', 'আফ্রিকা', 'ইরাক', 'ইরান', 'দক্ষিণ আফ্রিকা'
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
        return Utils::getBanglaNumber(static::randomNumber(1, 100));
    }

    public static function banglaStreetName()
    {
        return static::randomElement(static::$streetNames);
    }


}
