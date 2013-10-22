<?php

namespace Faker\Provider\es_ES;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'hotmail.com', 'hotmail.es', 'yahoo.com', 'yahoo.es', 'live.com', 'hispavista.com', 'latinmail.com', 'terra.com');
    protected static $tld = array('com', 'com', 'com', 'com', 'net', 'org', 'org', 'es', 'es', 'es', 'com.es');

    /**
     * Converts French characters to their ASCII representation
     *
     * @return string
     */
    private static function toAscii($string)
    {
        $string = htmlentities($string, ENT_NOQUOTES, 'UTF-8');
        $string = preg_replace('/\W/', '-', preg_replace('/&(\w)\w+;/', '$1', $string));

        return trim($string, '-');
    }

    /**
     * @example 'jdoe'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);
        $user = static::bothify($this->generator->parse($format));

        return str_replace('-', '.', static::toLower(static::toAscii($user)));
    }

    /**
     * @example 'faber'
     */
    public function domainWord()
    {
        list($company) = explode(' ', $this->generator->format('company'));

        return static::toLower(static::toAscii($company));
    }
}
