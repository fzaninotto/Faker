<?php

namespace Faker\Provider\me_ME;

class Internet extends \Faker\Provider\Internet
{
    /**
     * @example 'jdoe'
     */
    public function userName()
    {
        return static::convertToNormal(parent::userName());
    }
    public function domainWord()
    {
        return static::convertToNormal(parent::domainWord());
    }
}
