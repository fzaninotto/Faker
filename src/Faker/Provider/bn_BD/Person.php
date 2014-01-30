<?php

namespace Faker\Provider\bn_BD;

class Person extends \Faker\Provider\Person
{
    protected static $formats = array(
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{prefix}} {{firstName}} {{lastName}}',

    );

    protected static $firstName = array(
        'মাসনুন', 'রহিম', 'করিম', 'হাসিন', 'রিফাত',
        'আহসান', 'রহমত', 'হাসান', 'ইমরুল', 'হাসনাত',
        'অনন্ত', 'জলিল', 'আব্দুল্লাহ', 'বরকত',
        'মাহজাবিন', 'রহিমা', 'মেহনাজ', 'লাবনী', 'সাবরিনা',
        'সাবরিন', 'জারিন', 'জেরিন', 'ফারহানা', 'ফাহমেদা'
    );

    protected static $lastName = array(
        'খান', 'শেখ', 'শিকদার', 'আলী', 'তাসনীম', 'তাবাসসুম'
    );

    private static $prefix = array('মি.', 'মিসেস. ', 'মিস.');


    public static function prefix()
    {
        return static::randomElement(static::$prefix);
    }

}
