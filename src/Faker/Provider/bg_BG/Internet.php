<?php

namespace Faker\Provider\bg_BG;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com', 'mail.bg', 'abv.bg', 'dir.bg');
    protected static $tld = array('bg', 'bg', 'bg', 'bg', 'bg', 'bg', 'com', 'biz', 'info', 'net', 'org');
}
