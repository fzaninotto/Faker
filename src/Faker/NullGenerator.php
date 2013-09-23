<?php

namespace Faker;

/**
 * This generator returns NULL for all called propertis.  It works with
 * Faker\Generator\Base->optional()
 */
class NullGenerator
{

    public function __get($attribute)
    {
        return null;
    }

    public function __call($method, $attributes)
    {
        return null;
    }

}
