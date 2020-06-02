<?php

namespace Faker\Provider\es_CL;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com', 'hotmail.cl', 'yahoo.cl');
    protected static $tld = array('cl');
}
