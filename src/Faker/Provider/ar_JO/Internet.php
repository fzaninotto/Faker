<?php

namespace Faker\Provider\ar_JO;

class Internet extends \Faker\Provider\Internet
{
    protected static $userNameFormats = array(
        '{{lastNameAscii}}.{{firstNameAscii}}',
        '{{firstNameAscii}}.{{lastNameAscii}}',
        '{{firstNameAscii}}##',
        '?{{lastNameAscii}}',
    );
    protected static $safeEmailTld = array(
        'org', 'com', 'net', 'jo', 'me'
    );

    protected static $tld = array(
        'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'jo',
    );

    protected static $lastNameAscii = array(
        'hamad', 'karam', 'abbas', 'abbad', 'kanaan', 'abulebbeh', 'abbadi', 'hasan', 'rashwani', 'nimry', 'qasem', 'obaisi'
    );
    protected static $firstNameAscii = array(
        'abd','omar','bilal','ahmad', 'mohammad', 'akram', 'fadi', 'mutaz', 'layth', 'osama', 'rami', 'sami', 'samer', 'bashar', 'abdullah', 'omar', 'amr', 'yazan', 'ibrahim', 'khaled', 'saleem'
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
     * @example 'ahmad.abbadi'
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
