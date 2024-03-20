<?php

namespace Faker\Provider\da_DK;

/**
 * @author Antoine Corcy <contact@sbin.dk>
 */
class Internet extends \Faker\Provider\Internet
{
    /**
     * @var array Some safe email TLD.
     */
    protected static array $safeEmailTld = [
        'org',
        'com',
        'net',
        'dk',
        'dk',
        'dk',
    ];

    /**
     * @var array Some email domains in Denmark.
     */
    protected static array $freeEmailDomain = [
        'gmail.com',
        'yahoo.com',
        'yahoo.dk',
        'hotmail.com',
        'hotmail.dk',
        'mail.dk',
        'live.dk',
    ];

    /**
     * @var array Some TLD.
     */
    protected static array $tld = [
        'com',
        'com',
        'com',
        'biz',
        'info',
        'net',
        'org',
        'dk',
        'dk',
        'dk',
    ];
}
