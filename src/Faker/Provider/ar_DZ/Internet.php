<?php

namespace Faker\Provider\ar_DZ;

class Internet extends \Faker\Provider\Internet
{
    protected static $userNameFormats = array(
        '{{lastNameAscii}}.{{firstNameAscii}}',
        '{{firstNameAscii}}.{{lastNameAscii}}',
        '{{firstNameAscii}}_{{lastNameAscii}}',
        '{{lastNameAscii}}_{{firstNameAscii}}',
        '{{firstNameAscii}}##',
        '?{{lastNameAscii}}',
    );
    protected static $safeEmailTld = array(
        'com', 'dz', 'me', 'net', 'org',
    );

    protected static $tld = array(
        'com', 'info', 'dz', 'net', 'org',
    );

    protected static $lastNameAscii = array(
        'said', 'cherifi', 'abbas', 'zaim', 'hayder', 'hamidi', 'hassene', 'djabri', 'bourouba', 'sbaa', 'mhammedi', 'mouniim', 'chouia', 'biga', 'triki', 'cherfaoui', 'rabii', 'twati', 'taibaoui',
    );
    protected static $firstNameAscii = array(
        'abdou', 'abdallah', 'ahmed', 'akram', 'bashar', 'billel', 'saad', 'brahim', 'khaled', 'khalil', 'mohamed', 'omar', 'osama', 'rami', 'salim', 'samir', 'sami', 'youcef',
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
