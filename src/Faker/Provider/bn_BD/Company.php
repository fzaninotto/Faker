<?php

namespace Faker\Provider\bn_BD;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companyName}} {{companyType}}'
    );

    protected static $names = array(
        'রহিম', 'করিম', 'বাবলু' , 'আজাদ' , 'ট্রান্সেন্ডিও' , 'আড়ং' , 'রহমান' , 'ভাই ভাই' , 'নিউজ ক্রেড'
    );

    protected static $types = array(
        'সিমেন্ট', 'সার', 'ঢেউটিন' , 'সফটওয়্যার' , 'কোং' , 'গার্মেন্টস' , 'স্টার্ট আপ'
    );

    public static function companyType()
    {
        return static::randomElement(static::$types);
    }

    public static function companyName()
    {
        return static::randomElement(static::$names);
    }
}
