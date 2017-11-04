<?php

namespace Faker\Test;

use Faker\DefaultGenerator;
use PHPUnit\Framework\TestCase;

class DefaultGeneratorTest extends TestCase
{
    public function testGeneratorReturnsNullByDefault()
    {
        $generator = new DefaultGenerator;
        $this->assertSame(null, $generator->value);
    }

    public function testGeneratorReturnsDefaultValueForAnyPropertyGet()
    {
        $generator = new DefaultGenerator(123);
        $this->assertSame(123, $generator->foo);
        $this->assertNotSame(null, $generator->bar);
    }

    public function testGeneratorReturnsDefaultValueForAnyMethodCall()
    {
        $generator = new DefaultGenerator(123);
        $this->assertSame(123, $generator->foobar());
    }
}
