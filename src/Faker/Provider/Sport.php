<?php

namespace Faker\Provider;

class Sport extends Base
{
    protected static $sports = array(
        'Volleyball',
    );

    public function sport()
    {
        return static::randomElement(static::$sports);
    }
}
