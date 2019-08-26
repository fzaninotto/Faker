<?php

namespace Faker\Provider\nl_NL;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'hotmail.nl', 'live.nl', 'yahoo.nl');
    protected static $tld = array('com', 'net', 'org', 'nl');
}
