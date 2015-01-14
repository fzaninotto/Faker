<?php

namespace Faker\Provider\fa_IR;

class Internet extends \Faker\Provider\Internet
{
    protected static $userNameFormats = array(
        '{{lastNameAscii}}.{{firstNameAscii}}',
        '{{firstNameAscii}}.{{lastNameAscii}}',
        '{{firstNameAscii}}##',
        '?{{lastNameAscii}}',
    );

    protected static $safeEmailTld = array(
        'com', 'ir', 'me', 'net', 'org',
    );

    protected static $tld = array(
        'biz', 'com', 'info', 'ir', 'net', 'org',
    );

    protected static $lastNameAscii = array(
        'ahmadi', 'rezaei', 'mohammady', 'salari', 'zare', 'chamran', 'hosseini', 'hasan', 'shahriari', 'karimi', 'majidi', 'moosavi', 'soleimani', 'ebrahimi', 'abbasi', 'majedi', 'nili', 'yazdi', 'jalili', 'babaei', 'ghasemi',
    );
    protected static $firstNameAscii = array(
        'ali', 'reza', 'ahmad', 'hoda', 'mohsen', 'kamran', 'hanie', 'majid', 'hossein', 'maryam', 'arman', 'mohammad', 'amir', 'mahdi', 'bahar', 'zahra', 'marjan', 'behnaz', 'fateme', 'zeynab',
    );

    public static function lastNameAscii()
    {
        return static::randomElement(static::$lastNameAscii);
    }

    public static function firstNameAscii()
    {
        return static::randomElement(static::$firstNameAscii);
    }

    /**
     * @example 'ali.rezaei'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::bothify($this->generator->parse($format));
    }

    /**
     * @example 'wewebit.jo'
     */
    public function domainName()
    {
        return static::randomElement(static::$lastNameAscii) . '.' . $this->tld();
    }
}
