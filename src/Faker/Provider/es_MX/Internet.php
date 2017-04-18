<?php

namespace Faker\Provider\es_MX;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'hotmail.com','hotmail.com.mx', 'yahoo.com', 'live.com', 'live.com.mx', 'hispavista.com', 'terra.com', 'terra.com.mx');
    protected static $tld = array('com', 'com', 'com', 'com', 'net', 'org', 'org', 'mx', 'mx', 'mx', 'com.mx', 'com.mx', 'gob.mx');
}
