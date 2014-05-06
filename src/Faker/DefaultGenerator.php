<?php

namespace Faker;

/**
 * This generator returns a default value for all called properties
 * and methods. It works with Faker\Generator\Base->optional().
 */
class DefaultGenerator
{
    protected $default = null;

    public function __construct($default = null)
    {
        $this->default = $default;
    }

    public function __get($attribute)
    {
        return $this->default;
    }

    public function __call($method, $attributes)
    {
        return $this->default;
    }
}
