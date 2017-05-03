<?php

namespace Faker\Provider\en_IE;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com', 'eircom.net', 'oceanfree.net');
    protected static $tld = array('ie', 'ie', 'ie', 'ie', 'com', 'com', 'net');

    /**
     * Converts Irish characters to their ASCII representation
     *
     * @return string
     */
    public static function toAscii($string)
    {
        $from = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú');
        $to   = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');

        return str_replace($from, $to, $string);
    }

    /**
     * @example 'ruari'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::toLower(static::toAscii(static::bothify($this->generator->parse($format))));
    }
}
