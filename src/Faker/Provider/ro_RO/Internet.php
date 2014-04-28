<?php

namespace Faker\Provider\ro_RO;

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
