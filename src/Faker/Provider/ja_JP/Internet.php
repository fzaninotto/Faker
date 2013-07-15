<?php

namespace Faker\Provider\ja_JP;

class Internet extends \Faker\Provider\Internet
{
    protected static $userNameFormats = array(
        '{{lastNameAscii}}.{{firstNameAscii}}',
        '{{firstNameAscii}}.{{lastNameAscii}}',
        '{{firstNameAscii}}##',
        '?{{lastNameAscii}}',
    );
    protected static $safeEmailTld = array(
        'org', 'com', 'net', 'jp', 'jp', 'jp',
    );
    protected static $freeEmailDomain = array(
        'gmail.com', 'yahoo.co.jp', 'hotmail.co.jp', 'mail.goo.ne.jp'
    );
    protected static $tld = array(
        'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'jp', 'jp', 'jp',
    );

    protected static $lastNameAscii = array(
        'uno', 'kudo', 'suzuki', 'tanabe', 'nagisa', 'hirokawa', 'yoshimoto'
    );
    protected static $firstNameAscii = array(
        'akira', 'kana', 'taro', 'naoko', 'hiroshi', 'momoko', 'rika'
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
     * @example 'suzuki.taro'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::bothify($this->generator->parse($format));
    }

    /**
     * @example 'yamada.jp'
     */
    public function domainName()
    {
        return static::randomElement(static::$lastNameAscii) . '.' . $this->tld();
    }
}
