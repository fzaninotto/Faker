<?php

namespace Faker;

/**
 * Proxy for other generators, to return only valid values. Works with
 * Faker\Generator\Base->valid()
 */
class ValidGenerator
{
    protected $generator;
    protected $validator;
    protected $maxRetries;

    /**
     * @param Generator $generator
     * @param callable|null $validator
     * @param int $maxRetries
     */
    public function __construct(Generator $generator, $validator = null, $maxRetries = 10000)
    {
        if (is_null($validator)) {
            $validator = function () {
                return true;
            };
        } elseif (!is_callable($validator)) {
            throw new \InvalidArgumentException('valid() only accepts callables as first argument');
        }
        $this->generator = $generator;
        $this->validator = $validator;
        $this->maxRetries = $maxRetries;
    }

    /**
     * Catch and proxy all generator calls but return only valid values
     * @param string $attribute
     *
     * @return mixed
     */
    public function __get($attribute)
    {
        return $this->__call($attribute, []);
    }

    /**
     * Catch and proxy all generator calls with arguments but return only valid values
     * @param string $name
     * @param array $arguments
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        $i = 0;
        do {
            $res = call_user_func_array([$this->generator, $name], $arguments);
            $i++;
            if ($i > $this->maxRetries) {
                throw new \OverflowException(sprintf('Maximum retries of %d reached without finding a valid value', $this->maxRetries));
            }
        } while (!call_user_func($this->validator, $res));

        return $res;
    }
}
