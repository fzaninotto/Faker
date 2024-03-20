<?php

namespace Faker\Provider\ar_JO;

class Internet extends \Faker\Provider\Internet
{
    protected static array $userNameFormats = [
        '{{lastNameAscii}}.{{firstNameAscii}}',
        '{{firstNameAscii}}.{{lastNameAscii}}',
        '{{firstNameAscii}}##',
        '?{{lastNameAscii}}',
    ];
    protected static array $safeEmailTld = [
        'com',
        'jo',
        'me',
        'net',
        'org',
    ];

    protected static array $tld = [
        'biz',
        'com',
        'info',
        'jo',
        'net',
        'org',
    ];

    protected static array $lastNameAscii = [
        'abbad',
        'abbadi',
        'abbas',
        'abulebbeh',
        'flefel',
        'hadi',
        'hamad',
        'hasan',
        'jabri',
        'kanaan',
        'karam',
        'maanee',
        'melhem',
        'nimry',
        'obaisi',
        'qasem',
        'qawasmee',
        'rabee',
        'rashwani',
        'shami',
        'zaloum',
    ];
    protected static array $firstNameAscii = [
        'abd',
        'abdullah',
        'ahmad',
        'akram',
        'amr',
        'bashar',
        'bilal',
        'fadi',
        'ibrahim',
        'khaled',
        'layth',
        'mohammad',
        'mutaz',
        'omar',
        'osama',
        'rami',
        'saleem',
        'samer',
        'sami',
        'yazan',
    ];

    public static function lastNameAscii(): string
    {
        return static::randomElement(static::$lastNameAscii);
    }

    public static function firstNameAscii(): string
    {
        return static::randomElement(static::$firstNameAscii);
    }

    /**
     * @example 'ahmad.abbadi'
     */
    public function userName(): string
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::bothify($this->generator->parse($format));
    }

    /**
     * @example 'wewebit.jo'
     */
    public function domainName(): string
    {
        return static::randomElement(static::$lastNameAscii).'.'.$this->tld();
    }
}
