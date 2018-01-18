<?php

namespace Faker\Provider\de_CH;

class Internet extends \Faker\Provider\Internet
{
    /**
     * @link https://www.statista.com/statistics/446418/most-popular-e-mail-providers-germany/
     * @link http://blog.shuttlecloud.com/the-10-most-popular-email-providers-in-germany
     */
    protected static $freeEmailDomain = array(
        'gmail.com',
        'hotmail.com',
        'yahoo.com',
        'googlemail.com',
        'gmx.ch',
        'bluewin.ch',
        'swissonline.ch'
    );
    protected static $tld = array('com', 'com', 'com', 'net', 'org', 'li', 'ch', 'ch');
}
