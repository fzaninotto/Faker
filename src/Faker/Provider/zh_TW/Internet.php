<?php

namespace Faker\Provider\zh_TW;

class Internet extends \Faker\Provider\Internet
{
    public function userName(): string
    {
        return \Faker\Factory::create('en_US')->userName();
    }

    public function domainWord(): string
    {
        return \Faker\Factory::create('en_US')->domainWord();
    }
}
