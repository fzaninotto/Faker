<?php

namespace Faker\Test;

use Faker\DefaultGenerator;

final class DefaultGeneratorTest extends TestCase
{
    /**
     * @group legacy
     */
    public function testGeneratorReturnsNullByDefault(): void
    {
        $generator = new DefaultGenerator();
        self::assertNull($generator->value);
    }

    /**
     * @group legacy
     */
    public function testGeneratorReturnsDefaultValueForAnyPropertyGet(): void
    {
        $generator = new DefaultGenerator(123);
        self::assertSame(123, $generator->foo);
        self::assertNotNull($generator->bar);
    }

    /**
     * @group legacy
     */
    public function testGeneratorReturnsDefaultValueForAnyMethodCall(): void
    {
        $generator = new DefaultGenerator(123);
        self::assertSame(123, $generator->foobar());
    }
}
