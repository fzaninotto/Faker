<?php

namespace Faker\Provider\hy_AM;

class Internet extends \Faker\Provider\Internet
{
    protected static $tld = array('com', 'com', 'am', 'am', 'am', 'net', 'org', 'ru', 'am', 'am', 'am');

    /**
     * @example 'jdoe'
     */
    public function userName()
    {
        return static::toAscii(parent::userName());
    }

    private static function toAscii($string)
    {
        $string = mb_strtolower($string, 'UTF-8');

        return str_replace(
            array('ւ', 'ու', 'ա', 'բ', 'գ', 'դ', 'ե', 'զ', 'է', 'ը', 'թ', 'ժ', 'ի', 'լ', 'խ', 'ծ', 'կ', 'հ', 'ձ', 'ղ', 'ճ', 'մ', 'յ', 'ն', 'շ', 'ո', 'չ', 'պ', 'ջ', 'ռ', 'ս', 'վ', 'տ', 'ր', 'ց', 'փ', 'ք', 'և', 'օ', 'ֆ',),
            array('l', 'u', 'a', 'b', 'g', 'd', 'e', 'z', 'e', 'y', 't', 'zh', 'i', 'l', 'kh', 'ts', 'k', 'h', 'dz', 'gh', 'ch', 'm', 'y', 'n', 'sh', 'o', 'ch', 'p', 'j', 'r', 's', 'v', 't', 'r', 'ts', 'p', 'q', 'ev', 'o', 'f'),
            $string
        );
    }

    /**
     * @example 'faber'
     */
    public function domainWord()
    {
        return static::toAscii(parent::domainWord());
    }
}
