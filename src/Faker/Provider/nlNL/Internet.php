<?php

namespace Faker\Provider\nlNL;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'hotmail.nl', 'live.nl', 'yahoo.nl');
    protected static $tld = array('com', 'com', 'com', 'net', 'org', 'nl', 'nl', 'nl');
}
