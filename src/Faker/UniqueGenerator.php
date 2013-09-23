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

    public function __construct(Generator $generator, $maxRetries)
    {
        $this->generator = $generator;
        $this->maxRetries = $maxRetries;
    }

    /**
     * Catch and proxy all generator calls but return only unique values
     */
    public function __get($attribute)
    {
        return $this->__call($attribute, array());
    }

    /**
     * Catch and proxy all generator calls with arguments but return only unique values
     */
    public function __call($name, $arguments)
    {
        if (!isset($this->uniques[$name])) {
            $this->uniques[$name] = array();
        }
        $i = 0;
        do {
            $res = call_user_func_array(array($this->generator, $name), $arguments);
            $i++;
            if ($i > $this->maxRetries) {
                throw new \OverflowException(sprintf('Maximum retries of %d reached without finding a unique value', $this->maxRetries));
            }
        } while (in_array($res, $this->uniques[$name]));
        $this->uniques[$name][]= $res;

        return $res;
    }
}
