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
    protected static $safeEmailTld = array(
        'org', 'com', 'net', 'dk', 'dk', 'dk',
    );

    /**
     * @var array Some email domains in Denmark.
     */
    protected static $freeEmailDomain = array(
        'gmail.com', 'yahoo.com', 'yahoo.dk', 'hotmail.com', 'hotmail.dk', 'mail.dk', 'live.dk'
    );

    /**
     * @var array Some TLD.
     */
    protected static $tld = array(
        'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'dk', 'dk', 'dk',
    );
}
