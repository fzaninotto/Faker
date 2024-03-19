<?php

namespace Faker;

/**
 * Proxy for other generators, to return only unique values. Works with
 * Faker\Generator\Base->unique().
 */
class UniqueGenerator
{
    protected Generator $generator;
    protected int $maxRetries;
    protected array $uniques = [];

    public function __construct(Generator $generator, int $maxRetries = 10000)
    {
        $this->generator = $generator;
        $this->maxRetries = $maxRetries;
    }

    /**
     * Catch and proxy all generator calls but return only unique values.
     */
    public function __get(string $attribute): mixed
    {
        return $this->__call($attribute, []);
    }

    /**
     * Catch and proxy all generator calls with arguments but return only unique values.
     */
    public function __call(string $name, array $arguments): mixed
    {
        if (!isset($this->uniques[$name])) {
            $this->uniques[$name] = [];
        }
        $i = 0;
        do {
            $res = \call_user_func_array([$this->generator, $name], $arguments);
            ++$i;
            if ($i > $this->maxRetries) {
                throw new \OverflowException(\sprintf('Maximum retries of %d reached without finding a unique value', $this->maxRetries));
            }
        } while (\array_key_exists(\serialize($res), $this->uniques[$name]));
        $this->uniques[$name][\serialize($res)] = null;

        return $res;
    }
}
