<?php

namespace Faker\Test;

use Faker\Generator;
use Faker\Test\Fixture;
use PHPUnit\Framework\TestCase;

class GeneratorTest extends TestCase
{
    public function testAddProviderGivesPriorityToNewlyAddedProvider()
    {
        $generator = new Generator();
        $generator->addProvider(new Fixture\Generator\FooProvider());
        $generator->addProvider(new Fixture\Generator\BarProvider());
        $this->assertEquals('barfoo', $generator->format('fooFormatter'));
    }

    public function testGetFormatterReturnsCallable()
    {
        $generator = new Generator();
        $provider = new Fixture\Generator\FooProvider();
        $generator->addProvider($provider);
        $this->assertIsCallable($generator->getFormatter('fooFormatter'));
    }

    public function testGetFormatterReturnsCorrectFormatter()
    {
        $generator = new Generator();
        $provider = new Fixture\Generator\FooProvider();
        $generator->addProvider($provider);
        $expected = [$provider, 'fooFormatter'];
        $this->assertEquals($expected, $generator->getFormatter('fooFormatter'));
    }


    public function testGetFormatterThrowsExceptionOnIncorrectProvider()
    {
        $this->expectException(\InvalidArgumentException::class);

        $generator = new Generator();
        $generator->getFormatter('fooFormatter');
    }


    public function testGetFormatterThrowsExceptionOnIncorrectFormatter()
    {
        $this->expectException(\InvalidArgumentException::class);

        $generator = new Generator();
        $provider = new Fixture\Generator\FooProvider();
        $generator->addProvider($provider);
        $generator->getFormatter('barFormatter');
    }

    public function testFormatCallsFormatterOnProvider()
    {
        $generator = new Generator();
        $provider = new Fixture\Generator\FooProvider();
        $generator->addProvider($provider);
        $this->assertEquals('foobar', $generator->format('fooFormatter'));
    }

    public function testFormatTransfersArgumentsToFormatter()
    {
        $generator = new Generator();
        $provider = new Fixture\Generator\FooProvider();
        $generator->addProvider($provider);
        $this->assertEquals('bazfoo', $generator->format('fooFormatterWithArguments', ['foo']));
    }

    public function testParseReturnsSameStringWhenItContainsNoCurlyBraces()
    {
        $generator = new Generator();
        $this->assertEquals('fooBar#?', $generator->parse('fooBar#?'));
    }

    public function testParseReturnsStringWithTokensReplacedByFormatters()
    {
        $generator = new Generator();
        $provider = new Fixture\Generator\FooProvider();
        $generator->addProvider($provider);
        $this->assertEquals('This is foobar a text with foobar', $generator->parse('This is {{fooFormatter}} a text with {{ fooFormatter }}'));
    }

    public function testMagicGetCallsFormat()
    {
        $generator = new Generator();
        $provider = new Fixture\Generator\FooProvider();
        $generator->addProvider($provider);
        $this->assertEquals('foobar', $generator->fooFormatter);
    }

    public function testMagicCallCallsFormat()
    {
        $generator = new Generator();
        $provider = new Fixture\Generator\FooProvider();
        $generator->addProvider($provider);
        $this->assertEquals('foobar', $generator->fooFormatter());
    }

    public function testMagicCallCallsFormatWithArguments()
    {
        $generator = new Generator();
        $provider = new Fixture\Generator\FooProvider();
        $generator->addProvider($provider);
        $this->assertEquals('bazfoo', $generator->fooFormatterWithArguments('foo'));
    }

    public function testSeed()
    {
        $generator = new Generator();

        $generator->seed(0);
        $mtRandWithSeedZero = mt_rand();
        $generator->seed(0);
        $this->assertEquals($mtRandWithSeedZero, mt_rand(), 'seed(0) should be deterministic.');

        $generator->seed();
        $mtRandWithoutSeed = mt_rand();
        $this->assertNotEquals($mtRandWithSeedZero, $mtRandWithoutSeed, 'seed() should be different than seed(0)');
        $generator->seed();
        $this->assertNotEquals($mtRandWithoutSeed, mt_rand(), 'seed() should not be deterministic.');

        $generator->seed('10');
        $this->assertTrue(true, 'seeding with a non int value doesn\'t throw an exception');
    }
}
