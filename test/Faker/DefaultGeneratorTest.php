<?php

namespace Faker\Test;

use Faker\DefaultGenerator;
use PHPUnit\Framework\TestCase;

final class DefaultGeneratorTest extends TestCase
{
    public function testGeneratorReturnsNullByDefault(): void
    {
        $generator = new DefaultGenerator();
        $this->assertNull($generator->value);
    }

    public function testGeneratorReturnsDefaultValueForAnyPropertyGet(): void
    {
        $generator = new DefaultGenerator(123);
        $this->assertSame(123, $generator->foo);
        $this->assertNotNull($generator->bar);
    }

    public function testGeneratorReturnsDefaultValueForAnyMethodCall(): void
    {
        $generator = new DefaultGenerator(123);
        $this->assertSame(123, $generator->foobar());
    }
}
