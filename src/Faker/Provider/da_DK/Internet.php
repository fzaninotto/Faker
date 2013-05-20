<?php

namespace Faker\Provider\da_DK;

/**
 * @author Antoine Corcy <contact@sbin.dk>
 */
class Internet extends \Faker\Provider\Internet
{
    /**
     * @var array Some safe email TLD.
     */
    protected static $safeEmailTld = array(
        'org', 'com', 'net', 'dk', 'dk', 'dk',
    );

    /**
     * @var array Some email domains in Denmark.
     */
    protected static $freeEmailDomain = array(
        'gmail.com', 'yahoo.com', 'yahoo.dk', 'hotmail.com', 'hotmail.dk', 'mail.dk', 'live.dk'
    );

    /**
     * @var array Some TLD.
     */
    protected static $tld = array(
        'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'dk', 'dk', 'dk',
    );

    /**
     * Converts Danish characters to their ASCII representation
     *
     * @return string
     */
    private static function toAscii($string)
    {
        $from = array('æ', 'ø', 'å', 'Æ', 'Ø', 'Å');
        $to   = array('ae', 'oe', 'aa', 'AE', 'OE', 'AA');

        return str_replace($from, $to, $string);
    }

    /**
     * @example 'jeppe'
     * @return string
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::toLower(static::toAscii(static::bothify($this->generator->parse($format))));
    }

    /**
     * @example 'jensen.dk'
     * @return string
     */
    public function domainWord()
    {
        $company = $this->generator->format('company');
        $companyElements = explode(' ', $company);
        $company = $companyElements[0];
        $company = preg_replace('/\W/u', '', $company);

        return static::toLower(static::toAscii($company));
    }
}
