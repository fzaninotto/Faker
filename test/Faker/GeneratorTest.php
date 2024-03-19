<?php

namespace Faker\Test;

use Faker\Generator;
use PHPUnit\Framework\TestCase;

final class GeneratorTest extends TestCase
{
    public function testAddProviderGivesPriorityToNewlyAddedProvider(): void
    {
        $generator = new Generator();
        $generator->addProvider(new FooProvider());
        $generator->addProvider(new BarProvider());
        $this->assertEquals('barfoo', $generator->format('fooFormatter'));
    }

    public function testGetFormatterReturnsCallable(): void
    {
        $generator = new Generator();
        $provider = new FooProvider();
        $generator->addProvider($provider);
        $this->assertIsCallable($generator->getFormatter('fooFormatter'));
    }

    public function testGetFormatterReturnsCorrectFormatter(): void
    {
        $generator = new Generator();
        $provider = new FooProvider();
        $generator->addProvider($provider);
        $expected = [$provider, 'fooFormatter'];
        $this->assertEquals($expected, $generator->getFormatter('fooFormatter'));
    }

    public function testGetFormatterThrowsExceptionOnIncorrectProvider(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $generator = new Generator();
        $generator->getFormatter('fooFormatter');
    }

    public function testGetFormatterThrowsExceptionOnIncorrectFormatter(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $generator = new Generator();
        $provider = new FooProvider();
        $generator->addProvider($provider);
        $generator->getFormatter('barFormatter');
    }

    public function testFormatCallsFormatterOnProvider(): void
    {
        $generator = new Generator();
        $provider = new FooProvider();
        $generator->addProvider($provider);
        $this->assertEquals('foobar', $generator->format('fooFormatter'));
    }

    public function testFormatTransfersArgumentsToFormatter(): void
    {
        $generator = new Generator();
        $provider = new FooProvider();
        $generator->addProvider($provider);
        $this->assertEquals('bazfoo', $generator->format('fooFormatterWithArguments', ['foo']));
    }

    public function testParseReturnsSameStringWhenItContainsNoCurlyBraces(): void
    {
        $generator = new Generator();
        $this->assertEquals('fooBar#?', $generator->parse('fooBar#?'));
    }

    public function testParseReturnsStringWithTokensReplacedByFormatters(): void
    {
        $generator = new Generator();
        $provider = new FooProvider();
        $generator->addProvider($provider);
        $this->assertEquals('This is foobar a text with foobar', $generator->parse('This is {{fooFormatter}} a text with {{ fooFormatter }}'));
    }

    public function testMagicGetCallsFormat(): void
    {
        $generator = new Generator();
        $provider = new FooProvider();
        $generator->addProvider($provider);
        $this->assertEquals('foobar', $generator->fooFormatter);
    }

    public function testMagicCallCallsFormat(): void
    {
        $generator = new Generator();
        $provider = new FooProvider();
        $generator->addProvider($provider);
        $this->assertEquals('foobar', $generator->fooFormatter());
    }

    public function testMagicCallCallsFormatWithArguments(): void
    {
        $generator = new Generator();
        $provider = new FooProvider();
        $generator->addProvider($provider);
        $this->assertEquals('bazfoo', $generator->fooFormatterWithArguments('foo'));
    }

    public function testSeed(): void
    {
        $generator = new Generator();

        $generator->seed(0);
        $mtRandWithSeedZero = \mt_rand();
        $generator->seed(0);
        $this->assertEquals($mtRandWithSeedZero, \mt_rand(), 'seed(0) should be deterministic.');

        $generator->seed();
        $mtRandWithoutSeed = \mt_rand();
        $this->assertNotEquals($mtRandWithSeedZero, $mtRandWithoutSeed, 'seed() should be different than seed(0)');
        $generator->seed();
        $this->assertNotEquals($mtRandWithoutSeed, \mt_rand(), 'seed() should not be deterministic.');

        $generator->seed('10');
        $this->assertTrue(true, 'seeding with a non int value doesn\'t throw an exception');
    }
}

final class FooProvider
{
    public function fooFormatter(): string
    {
        return 'foobar';
    }

    public function fooFormatterWithArguments($value = ''): string
    {
        return 'baz'.$value;
    }
}

final class BarProvider
{
    public function fooFormatter(): string
    {
        return 'barfoo';
    }
}
