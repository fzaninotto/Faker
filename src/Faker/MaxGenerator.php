<?php

namespace Faker;

/**
 * Proxy for other generators, to return up to a given amount of values. Works with
 * Faker\Generator\Base->unique()
 */
class MaxGenerator
{
    public $nextMax = false;
    public $resetNextIndividual = false;

    protected $generator;
    protected $data = array();

    public function __construct(Generator $generator, $maxRetries)
    {
        $this->generator = $generator;
        $this->maxRetries = $maxRetries;
    }

    /**
     * Catch and proxy all generator calls but return only up to the max number of values total
     */
    public function __get($attribute)
    {
        return $this->__call($attribute, array());
    }

    /**
     * Catch and proxy all generator calls with arguments but return only up to the max number of values total
     */
    public function __call($name, $arguments)
    {
        if ($this->resetNextIndividual) {
            unset($this->data[$name]);
        }
        if (!isset($this->data[$name])) {
            $this->data[$name] = array();
        }
        $index = rand(1, $this->nextMax);
        if (!isset($this->data[$name][$index])) {
            $i = 0;
            do {
                $res = call_user_func_array(array($this->generator, $name), $arguments);
                $i++;
                if ($i > $this->maxRetries) {
                    throw new \OverflowException(sprintf('Maximum retries of %d reached without finding a unique value', $this->maxRetries));
                }
            } while (array_search($res, $this->data[$name]));

            $this->data[$name][$index] = $res;
        }

        return $this->data[$name][$index];
    }
}
