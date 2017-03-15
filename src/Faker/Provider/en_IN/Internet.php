<?php

namespace Faker\Provider\en_IN;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com', 'yahoo.co.in', 'rediffmail.com');
    protected static $tld = array('com', 'com', 'com', 'com', 'com', 'com', 'in', 'in', 'in', 'ac.in', 'net', 'org', 'co.in');
}
