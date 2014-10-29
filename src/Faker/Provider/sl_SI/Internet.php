<?php

namespace Faker\Provider\sl_SI;

class Internet extends \Faker\Provider\Internet
{

    protected static $freeEmailDomain = array('gmail.com', 'gmail.com', 'gmail.com', 'hotmail.com', 'yahoo.com', 'siol.net', 't-2.net');

    protected static $tld = array('si', 'si', 'si', 'si', 'eu', 'com', 'info', 'net', 'org');

    /**
     * Converts slovenian characters to their ASCII representation
     *
     * @param string
     * @return string
     */
    private function toAscii($string)
    {
        $from = array('Š', 'š', 'Č', 'č', 'Ž', 'ž', 'Ć', 'ć', 'Đ', 'đ');
        $to   = array('S', 's', 'C', 'c', 'Z', 'z', 'C', 'c', 'D', 'd');

        return str_replace($from, $to, $string);
    }

    public function email()
    {
        return $this->toAscii(parent::email());
    }

    public function userName()
    {
        return $this->toAscii(parent::userName());
    }
}
