<?php

namespace Faker;

/**
 * Proxy for other generators, to return only unique values. Works with
 * Faker\Generator\Base->unique()
 */
class UniqueGenerator
{
    protected $generator;
    protected $maxRetries;
    protected $uniques = array();

    /**
     * @param Generator $generator
     */
    public function __construct(Generator $generator, $maxRetries)
    {
        $this->generator = $generator;
        $this->maxRetries = $maxRetries;
    }

    /**
     * Catch and proxy all generator calls but return only unique values
     * @param string $attribute
     */
    public function __get($attribute)
    {
        return $this->__call($attribute, array());
    }

    /**
     * Catch and proxy all generator calls with arguments but return only unique values
     * @param string $name
     * @param array $arguments
     */
    public function __call($name, $arguments)
    {
        if (!isset($this->uniques[$name])) {
            $this->uniques[$name] = array();
        }
        $i = 0;
        do {
            $i++;
            if ($i > $this->maxRetries) {
                throw new \OverflowException(sprintf('Maximum retries of %d reached without finding a unique value', $this->maxRetries));
            }
            $res = call_user_func_array(array($this->generator, $name), $arguments);
        } while (array_key_exists(serialize($res), $this->uniques[$name]));

        $this->uniques[$name][serialize($res)]= null;

        return $res;
    }
}
