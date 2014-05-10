<?php

namespace Faker\Provider\cs_CZ;

class Internet extends \Faker\Provider\Internet
{

    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'seznam.cz', 'atlas.cz', 'centrum.cz', 'email.cz', 'post.cz');

    protected static $tld = array('cz', 'cz', 'cz', 'cz', 'cz', 'cz', 'com', 'info', 'net', 'org');

    /**
     * Converts czech characters to their ASCII representation
     *
     * @return string
     */
    private function toAscii($string)
    {
        $from = array('Ě', 'ě', 'Š', 'š', 'Č', 'č', 'Ř', 'ř', 'Ž', 'ž', 'Ý', 'ý', 'Á', 'á', 'Í', 'í', 'É', 'é', 'Ó', 'ó', 'Ú', 'ú', 'Ů', 'ů', 'Ď', 'ď', 'Ť', 'ť', 'Ň', 'ň');
        $to		= array('E', 'e', 'S', 's', 'C', 'c', 'R', 'r', 'Z', 'z', 'Y', 'y', 'A', 'a', 'I', 'i', 'E', 'e', 'O', 'o', 'U', 'u', 'U', 'u', 'D', 'd', 'T', 't', 'N', 'n');

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
