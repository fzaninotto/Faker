<?php

namespace Faker\Provider\nl_BE;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'hotmail.com', 'yahoo.com', 'advalvas.be');
    protected static $tld = array('com', 'com', 'com', 'net', 'org', 'be', 'be', 'be');
}
