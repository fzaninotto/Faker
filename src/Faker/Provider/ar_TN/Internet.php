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
        'ziadi', 'donia', 'louhichi', 'faker', 'benmabrouk', 'benchaaben', 'dridi', 'hammadi', 'benmed', 'kanaan', 'karam', 'belhadj', 'bensalem', 'jomaa', 'tounsi', 'baghouli', 'boughanmi', 'daghfous', 'chaieb', 'jlali', 'trabelsi','ayari','chaaben','gharby','rkik','samaaly','hichri','ghodben','jaziri','benmami'
    );
    protected static $firstNameAscii = array(
        'khalil', 'ala', 'hedi', 'amine', 'amr', 'bashar', 'bilal', 'fadi', 'ibrahim', 'khaled', 'layth', 'mohammad', 'abdo', 'ilyes', 'helmi', 'anouer', 'wael', 'mido', 'med', 'salah','salih','hani','iyadh','najem','skander','nermine','eya','ghada','rim','shayma','nouha','nawress','yossri','hedi','modhaffar','ala','mohammed','chakib','badis','sadok','sam'
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
