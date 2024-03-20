<?php

namespace Faker\Provider\it_CH;

class Internet extends \Faker\Provider\Internet
{
    protected static array $freeEmailDomain = ['gmail.com', 'hotmail.com', 'yahoo.com', 'googlemail.com', 'gmx.ch', 'bluewin.ch', 'swissonline.ch'];
    protected static array $tld = ['com', 'com', 'com', 'net', 'org', 'li', 'ch', 'ch'];
}
