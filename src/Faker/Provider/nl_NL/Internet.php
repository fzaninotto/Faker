<?php

namespace Faker\Provider\nl_NL;

class Internet extends \Faker\Provider\Internet
{
    protected static $safeEmailTld = array('com', 'net', 'nl', 'nl');
    protected static $freeEmailDomain = array('gmail.com', 'hotmail.nl', 'live.nl', 'yahoo.nl');
    protected static $tld = array('com', 'com', 'com', 'net', 'org', 'nl', 'nl', 'nl');
}
