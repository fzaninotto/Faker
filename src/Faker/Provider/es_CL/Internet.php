<?php

namespace Faker\Provider\es_CL;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'hotmail.com', 'hotmail.cl', 'yahoo.com', 'yahoo.cl', 'live.com', 'live.cl','vtr.net', 'latinmail.com', 'terra.com','gob.cl');
    protected static $tld = array('com', 'com', 'com', 'com', 'net', 'org', 'org', 'cl','cl','cl','gob.cl');

    /**
     * Converts Spanish characters to their ASCII representation using an standard
     * chars convert function
     *
     * @return string
     */
    private static function toAscii($string)
    {
        $from = array('á', 'Á', 'é', 'É', 'í', 'Í', 'ó', 'Ó', 'ú', 'Ú', 'ü', 'Ü', 'ñ', 'Ñ');
        $to   = array('a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U', 'u', 'U', 'n', 'N');

        return str_replace($from, $to, $string);
    }

    /**
     * @example 'alex.iglesias'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);
        $user = static::bothify($this->generator->parse($format));

        return str_replace('-', '.', static::toLower(static::toAscii($user)));
    }

    /**
     * @example 'lovato-exposito'
     */
    public function domainWord()
    {
        list($company) = explode(' ', $this->generator->format('company'));

        return static::toLower(static::toAscii(preg_replace('/\W/u', '', $company)));
    }
}
