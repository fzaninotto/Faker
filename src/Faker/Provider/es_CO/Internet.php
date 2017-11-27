<?php

namespace Faker\Provider\es_CO;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'hotmail.com', 'hotmail.es', 'yahoo.com', 'yahoo.es');
    protected static $tld = array('com', 'co', 'com.co', 'net', 'net.co');
}
