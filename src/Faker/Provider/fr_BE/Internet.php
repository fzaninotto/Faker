<?php

namespace Faker\Provider\fr_BE;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'hotmail.com', 'yahoo.com', 'advalvas.be');
    protected static $tld = array('com', 'net', 'org', 'be');

    /**
     * Converts French characters to their ASCII representation
     *
     * @return string
     */
    private static function toAscii($string)
    {
        $from = array('à', 'À', 'ç', 'Ç', 'é', 'É', 'è', 'È', 'ë', 'Ë', 'ï', 'Ï', 'î', 'Î', 'ô', 'Ô', 'ù', 'Ù');
        $to = array('a', 'A', 'c', 'c', 'e', 'E', 'e', 'E', 'e', 'E', 'i', 'I', 'i', 'I', 'o', 'O', 'u', 'U');

        return str_replace($from, $to, $string);
    }

    /**
     * @example 'jdoe'
     */
    public function userName()
    {
        return static::toAscii(parent::userName());
    }

    /**
     * @example 'faber'
     */
    public function domainWord()
    {
        return static::toAscii(parent::domainWord());
    }
}
