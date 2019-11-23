<?php

namespace Faker\Provider\pt_PT;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com', 'sapo.pt', 'clix.pt', 'mail.pt');
    protected static $tld = array('com', 'com', 'pt', 'pt', 'net', 'org', 'eu');
}
