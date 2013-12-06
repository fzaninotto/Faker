<?php

namespace Faker\Provider\en_ZA;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com', 'webmail.co.za', 'vodamail.co.za');
    protected static $tld = array('co.za', 'co.za', 'co.za', '.co.za', 'com', 'com', 'net');
}
