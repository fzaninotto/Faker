<?php

namespace Faker\Provider\cs_CZ;

class Internet extends \Faker\Provider\Internet
{
    protected static array $freeEmailDomain = ['gmail.com', 'yahoo.com', 'seznam.cz', 'atlas.cz', 'centrum.cz', 'email.cz', 'post.cz'];
    protected static array $tld = ['cz', 'cz', 'cz', 'cz', 'cz', 'cz', 'com', 'info', 'net', 'org'];
}
