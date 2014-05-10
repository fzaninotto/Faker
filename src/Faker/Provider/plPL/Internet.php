<?php

namespace Faker\Provider\pl_PL;

class Internet extends \Faker\Provider\Internet
{

    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'wp.pl', 'onet.pl', 'interia.pl', 'gazeta.pl');

    protected static $tld = array('pl', 'pl', 'pl', 'pl', 'pl', 'pl', 'com', 'info', 'net', 'org', 'com.pl', 'com.pl');

    /**
     * Converts polish characters to their ASCII representation
     *
     * @return string
     */
    private function toAscii($string)
    {
        $from = array('ą', 'Ą', 'ć', 'Ć', 'ę', 'Ę', 'ł', 'Ł', 'ó', 'Ó', 'ś', 'Ś', 'ż', 'Ż', 'ź', 'Ź', 'ń', 'Ń');
        $to   = array('a', 'A', 'c', 'C', 'e', 'E', 'l', 'L', 'o', 'O', 's', 'S', 'z', 'Z', 'z', 'Z', 'n', 'n');

        return str_replace($from, $to, $string);
    }

    public function email()
    {
        return $this->toAscii(parent::email());
    }

    /**
     * @example 'dominika16'
     */
    public function userName()
    {
        return $this->toAscii(parent::userName());
    }
}
