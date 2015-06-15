<?php

namespace Faker\Provider\zh_TW;

class Internet extends \Faker\Provider\Internet
{
    public function userName()
    {
        return \Faker\Factory::create('en_US')->userName();
    }

    public function domainWord()
    {
        return \Faker\Factory::create('en_US')->domainWord();
    }
}
