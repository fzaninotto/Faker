<?php

namespace Faker\Test\Fixture\Generator;

class FooProvider
{
    public function fooFormatter()
    {
        return 'foobar';
    }

    public function fooFormatterWithArguments($value = '')
    {
        return 'baz' . $value;
    }
}
