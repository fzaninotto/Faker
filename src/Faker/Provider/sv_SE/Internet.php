<?php

namespace Faker\Provider\sv_SE;

/**
 * @author Nathanael Björkgård
 */
class Internet extends \Faker\Provider\Internet
{
    /**
     * @var array Some safe email TLD.
     */
    protected static $safeEmailTld = array(
        'org', 'com', 'net', 'se', 'se', 'se',
    );

    /**
     * @var array Some email domains in Denmark.
     */
    protected static $freeEmailDomain = array(
        'gmail.com', 'yahoo.com', 'yahoo.se', 'hotmail.com', 'hotmail.se', 'mail.se', 'live.se'
    );

    /**
     * @var array Some TLD.
     */
    protected static $tld = array(
        'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'se', 'se', 'se',
    );

    /**
     * Converts Danish characters to their ASCII representation
     *
     * @return string
     */
    private static function toAscii($string)
    {
        $from = array('å', 'ö', 'ä', 'Å', 'Ö', 'Ä');
        $to   = array('a', 'o', 'a', 'A', 'O', 'A');

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
     * @example 'jensen.se'
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
