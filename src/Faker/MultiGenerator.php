<?php

namespace Faker;

/**
 * Proxy for other generators, to return multiple data entities at the same
 * Works with Faker\Generator\Base->multi()
 */
class MultiGenerator extends Generator
{

    protected $generator;
    protected $count = 5;

    /**
     * @param Generator $generator
     */
    public function __construct(Generator $generator, $count = 5)
    {
        $this->generator = $generator;
        $this->count = $count;
    }

    /**
     * Catch and proxy all generator calls and order the values
     * @param string $attribute
     */
    public function __get($attribute)
    {
        return $this->__call($attribute, array());
    }

    /**
     * Catch and proxy all generator calls with arguments and order the values
     * @param string $name
     * @param array $arguments
     */
    public function __call($name, $arguments)
    {
        $res = array();
        for ($i = 0; $i < $this->count; $i++) {
            $res[] = call_user_func_array(array($this->generator, $name), $arguments);
        }

        return $res;
    }
}
