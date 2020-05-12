<?php

namespace Faker\Provider\ar_TN;

class Internet extends \Faker\Provider\Internet
{
    protected static $userNameFormats = array(
        '{{lastNameAscii}}.{{firstNameAscii}}',
        '{{firstNameAscii}}.{{lastNameAscii}}',
        '{{firstNameAscii}}##',
        '?{{lastNameAscii}}',
    );
    protected static $safeEmailTld = array(
        'gov.tn', 'com', 'com.tn', 'tn', 'net', 'org',
    );

    protected static $tld = array(
        'com.tn', 'com', 'gov.tn', 'tn', 'net', 'org',
    );

    protected static $lastNameAscii = array(
        'ziadi', 'donia', 'louhichi', 'whichi', 'ben mabrouk', 'ben chaaben', 'dridi', 'hammadi', 'ben med', 'kanaan', 'karam', 'maanee', 'ben salem', 'jomaa', 'tounsi', 'baghouli', 'boughanmi', 'daghfous', 'chaieb', 'shami', 'zaloum',
    );
    protected static $firstNameAscii = array(
        'khalil', 'ala', 'hedi', 'amine', 'amr', 'bashar', 'bilal', 'fadi', 'ibrahim', 'khaled', 'layth', 'mohammad', 'abdo', 'ilyes', 'helmi', 'anouer', 'wael', 'mido', 'med', 'karismatik',
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
     * @example 'amine.lch'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::bothify($this->generator->parse($format));
    }

    /**
     * @example 'karismatik.tn'
     */
    public function domainName()
    {
        return static::randomElement(static::$lastNameAscii) . '.' . $this->tld();
    }
}
