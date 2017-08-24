<?php

namespace Faker\Provider\fr_FR;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array(
        'voila.fr', 'gmail.com', 'hotmail.fr', 'yahoo.fr', 'laposte.net', 'free.fr',
        'sfr.fr', 'orange.fr', 'club-internet.fr', 'live.com', 'noos.fr', 'tiscali.fr', 
        'wanadoo.fr'
    );
    protected static $tld = array('com', 'eu', 'ovh', 'net', 'org', 'fr', 'org', 'alsace');
}
