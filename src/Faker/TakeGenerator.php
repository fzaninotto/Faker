<?php

namespace Faker;

class TakeGenerator
{
    /**
     * @var Generator
     */
    protected $generator;

    /**
     * @var int
     */
    protected $count;

    public function __construct(Generator $generator, $count)
    {
        if (!is_int($count) || 1 > $count) {
            throw new \InvalidArgumentException('Parameter "count" needs to be an integer greater than 0');
        }

        $this->generator = $generator;
        $this->count = $count;
    }

    /**
     * @param string $attribute
     *
     * @return array
     */
    public function __get($attribute)
    {
        return $this->__call($attribute, array());
    }

    /**
     * Catch and proxy all generator calls with arguments but return a number of values.
     *
     * @param string $name
     * @param array $arguments
     * @return array
     */
    public function __call($name, $arguments)
    {
        $result = array();

        for ($i = 0; $i < $this->count; $i++) {
            $result[] = call_user_func_array(array($this->generator, $name), $arguments);
        }

        return $result;
    }
}
