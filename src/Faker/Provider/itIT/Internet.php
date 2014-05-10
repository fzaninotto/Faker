<?php

namespace Faker\Provider\it_IT;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com', 'email.it', 'libero.it', 'yahoo.it');
    protected static $tld = array('com', 'com', 'com', 'net', 'org', 'it', 'it', 'it');

    /**
     * @{inheritdoc}
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::toLower(static::toAscii(static::bothify($this->generator->parse($format))));
    }

    /**
     * Converts Italian characters to their ASCII representation
     *
     * @return string
     */
    private static function toAscii($string)
    {
        $from = array('à', 'À', 'é', 'É', 'è', 'È', 'ù', 'Ù', "'");
        $to   = array('a', 'A', 'e', 'E', 'e', 'E', 'u', 'U', '');

        return str_replace($from, $to, $string);
    }
}
