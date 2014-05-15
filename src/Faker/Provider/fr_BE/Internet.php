<?php

namespace Faker\Provider\fr_BE;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'hotmail.com', 'yahoo.com', 'advalvas.be');
    protected static $tld = array('com', 'net', 'org', 'be');
}
