<?php

namespace Faker\Provider\ro_MD;

class Internet extends \Faker\Provider\Internet
{
    /**
     * @example 'jdoe'
     */
    public function userName()
    {
        return static::convertToNormal(parent::userName());
    }
}
