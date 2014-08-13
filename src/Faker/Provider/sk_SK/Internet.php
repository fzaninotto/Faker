<?php

namespace Faker\Provider\sk_SK;

class Internet extends \Faker\Provider\Internet
{

    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'zoznam.sk', 'atlas.sk', 'centrum.sk', 'azet.sk', 'post.sk');

    protected static $tld = array('sk', 'sk', 'sk', 'sk', 'sk', 'sk', 'eu', 'com', 'info', 'net', 'org');

    /**
     * Converts czech and slovak characters to their ASCII representation
     *
     * @param string
     * @return string
     */
    private function toAscii($string)
    {
        $from = array('Ě', 'ě', 'Š', 'š', 'Č', 'č', 'Ř', 'ř', 'Ž', 'ž', 'Ý', 'ý', 'Á', 'á', 'Í', 'í', 'É', 'é', 'Ó', 'ó', 'Ú', 'ú', 'Ů', 'ů', 'Ď', 'ď', 'Ť', 'ť', 'Ň', 'ň', 'ľ', 'Ľ', 'ä', 'Ä');
        $to = array('E', 'e', 'S', 's', 'C', 'c', 'R', 'r', 'Z', 'z', 'Y', 'y', 'A', 'a', 'I', 'i', 'E', 'e', 'O', 'o', 'U', 'u', 'U', 'u', 'D', 'd', 'T', 't', 'N', 'n', 'l', 'L', 'a', 'A');

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
