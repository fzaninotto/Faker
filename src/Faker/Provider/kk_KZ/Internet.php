<?php

namespace Faker\Provider\kk_KZ;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('mail.kz', 'yandex.kz', 'host.kz');
    protected static $tld = array('com', 'net', 'org', 'kz');
}
