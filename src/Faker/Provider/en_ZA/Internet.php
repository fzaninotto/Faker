<?php

namespace Faker\Provider\en_ZA;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = ['gmail.com', 'yahoo.com', 'hotmail.com', 'webmail.co.za', 'vodamail.co.za'];

    /**
     * @see https://en.wikipedia.org/wiki/.za
     */
    protected static $tld = [
        'co.za', 'co.za', 'co.za', 'co.za', 'com', 'com', 'net', 'gov.za', 'ac.za', 'edu.za', 'law.za', 'mil.za',
        'net.za', 'nom.za', 'org.za', 'school.za', 'ecape.school.za', 'fs.school.za', 'gp.school.za', 'kzn.school.za',
        'mpm.za', 'ncape.school.za', 'lp.school.za', 'nw.school.za', 'wcape.school.za', 'web.za', 'agric.za', 'nis.za',
        'grondar.za',
    ];
}
