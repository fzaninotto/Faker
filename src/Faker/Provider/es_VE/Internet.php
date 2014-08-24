<?php

namespace Faker\Provider\es_VE;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'hotmail.com', 'hotmail.es', 'yahoo.com', 'yahoo.es', 'live.com', 'hispavista.com', 'latinmail.com', 'terra.com');
    protected static $tld = array('com', 'com.ve', 'net', 'net.ve', 'org', 'org.ve', 'info.ve', 'co.ve', 'web.ve');

    /**
     * Converts Spanish characters to their ASCII representation using an standard
     * chars convert function
     * @param $string
     * @return string
     */
    private static function toAscii($string)
    {
        $from = array('á', 'Á', 'é', 'É', 'í', 'Í', 'ó', 'Ó', 'ú', 'Ú', 'ü', 'Ü', 'ñ', 'Ñ');
        $to = array('a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U', 'u', 'U', 'n', 'N');

        return str_replace($from, $to, $string);
    }

    /**
     * @example 'alex.iglesias'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::toLower(static::toAscii(static::bothify($this->generator->parse($format))));
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
