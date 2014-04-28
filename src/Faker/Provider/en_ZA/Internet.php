<?php

namespace Faker\Provider\en_ZA;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com', 'webmail.co.za', 'vodamail.co.za');
    protected static $tld = array('co.za', 'co.za', 'co.za', 'co.za', 'com', 'com', 'net');
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
