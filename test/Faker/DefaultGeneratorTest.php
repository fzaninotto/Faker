<?php

namespace Faker\Test;

use Faker\DefaultGenerator;

final class DefaultGeneratorTest extends TestCase
{
    public function testGeneratorReturnsNullByDefault()
    {
        $generator = new DefaultGenerator();
        self::assertNull($generator->value);
    }

    public function testGeneratorReturnsDefaultValueForAnyPropertyGet()
    {
        $generator = new DefaultGenerator(123);
        self::assertSame(123, $generator->foo);
        self::assertNotNull($generator->bar);
    }

    public function testGeneratorReturnsDefaultValueForAnyMethodCall()
    {
        $generator = new DefaultGenerator(123);
        self::assertSame(123, $generator->foobar());
    }
}
