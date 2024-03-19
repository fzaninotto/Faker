<?php

namespace Faker;

/**
 * This generator returns a default value for all called properties
 * and methods. It works with Faker\Generator\Base->optional().
 */
class DefaultGenerator
{
    protected mixed $default;

    public function __construct(mixed $default = null)
    {
        $this->default = $default;
    }

    public function __get(string $attribute): mixed
    {
        return $this->default;
    }

    public function __call(string $method, array $attributes): mixed
    {
        return $this->default;
    }
}
