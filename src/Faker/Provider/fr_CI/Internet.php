<?php

namespace Faker\Provider\fr_CI;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('aviso.ci', 'gmail.com', 'mtn.ci', 'yoomee.ci', 'orange.ci', 'moov.ci');
    protected static $tld = array('com', 'com', 'com', 'net', 'org', 'ci', 'ci', 'ci');
}
