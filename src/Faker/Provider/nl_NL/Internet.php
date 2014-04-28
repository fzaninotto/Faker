<?php

namespace Faker\Provider\nl_NL;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'hotmail.nl', 'live.nl', 'yahoo.nl');
    protected static $tld = array('com', 'com', 'com', 'net', 'org', 'nl', 'nl', 'nl');
    /**
     * @example 'jdoe'
     */
    public function userName()
    {
        return static::convertToNormal(parent::userName());
    }
    public function domainWord()
    {
        return static::convertToNormal(parent::domainWord());
    }
}
