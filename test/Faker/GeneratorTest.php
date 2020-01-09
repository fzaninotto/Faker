<?php

namespace Faker\Test;

use Faker\Generator;
use PHPUnit\Framework\TestCase;

final class GeneratorTest extends TestCase
{
    public function testAddProviderGivesPriorityToNewlyAddedProvider()
    {
        $generator = new Generator;
        $generator->addProvider(new FooProvider());
        $generator->addProvider(new BarProvider());
        $this->assertEquals('barfoo', $generator->format('fooFormatter'));
    }

    public function testGetFormatterReturnsCallable()
    {
        $generator = new Generator;
        $provider = new FooProvider();
        $generator->addProvider($provider);
        $this->assertInternalType('callable', $generator->getFormatter('fooFormatter'));
    }

    public function testGetFormatterReturnsCorrectFormatter()
    {
        $generator = new Generator;
        $provider = new FooProvider();
        $generator->addProvider($provider);
        $expected = array($provider, 'fooFormatter');
        $this->assertEquals($expected, $generator->getFormatter('fooFormatter'));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testGetFormatterThrowsExceptionOnIncorrectProvider()
    {
        $generator = new Generator;
        $generator->getFormatter('fooFormatter');
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testGetFormatterThrowsExceptionOnIncorrectFormatter()
    {
        $generator = new Generator;
        $provider = new FooProvider();
        $generator->addProvider($provider);
        $generator->getFormatter('barFormatter');
    }

    public function testFormatCallsFormatterOnProvider()
    {
        $generator = new Generator;
        $provider = new FooProvider();
        $generator->addProvider($provider);
        $this->assertEquals('foobar', $generator->format('fooFormatter'));
    }

    public function testFormatTransfersArgumentsToFormatter()
    {
        $generator = new Generator;
        $provider = new FooProvider();
        $generator->addProvider($provider);
        $this->assertEquals('bazfoo', $generator->format('fooFormatterWithArguments', array('foo')));
    }

    public function testParseReturnsSameStringWhenItContainsNoCurlyBraces()
    {
        $generator = new Generator();
        $this->assertEquals('fooBar#?', $generator->parse('fooBar#?'));
    }

    public function testParseReturnsStringWithTokensReplacedByFormatters()
    {
        $generator = new Generator();
        $provider = new FooProvider();
        $generator->addProvider($provider);
        $this->assertEquals('This is foobar a text with foobar', $generator->parse('This is {{fooFormatter}} a text with {{ fooFormatter }}'));
    }

    public function testMagicGetCallsFormat()
    {
        $generator = new Generator;
        $provider = new FooProvider();
        $generator->addProvider($provider);
        $this->assertEquals('foobar', $generator->fooFormatter);
    }

    public function testMagicCallCallsFormat()
    {
        $generator = new Generator;
        $provider = new FooProvider();
        $generator->addProvider($provider);
        $this->assertEquals('foobar', $generator->fooFormatter());
    }

    public function testMagicCallCallsFormatWithArguments()
    {
        $generator = new Generator;
        $provider = new FooProvider();
        $generator->addProvider($provider);
        $this->assertEquals('bazfoo', $generator->fooFormatterWithArguments('foo'));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testPluralizedMagicCalls()
    {
        $generator = new Generator;
        $provider = new FooProvider();
        $generator->addProvider($provider);

        $tests = $generator->tests(3, 'arg');
        $fishes = $generator->fishes(2, 'L');
        $cat = $generator->cat(1);
        $cats = $generator->cats(2, 2);
        $nums = $generator->nums();

        $this->assertInternalType('array', $tests);
        $this->assertCount(3, $tests);
        $this->assertSame(array('test arg', 'test arg', 'test arg'), $tests);

        $this->assertCount(2, $fishes);
        $this->assertSame(array('fish (L)', 'fish (L)'), $fishes);

        $this->assertInternalType('string', $cat);
        $this->assertSame('cat 1', $cat);

        $this->assertCount(2, $cats);
        $this->assertSame(array('cat 2', 'cat 2'), $cats);

        $this->assertInternalType('string', $nums);
        $this->assertSame('foo::nums', $nums);

        $this->assertCount(1, $generator->fishes(-1, 'S'));
        $this->assertCount(1, $generator->fishes(0, 'M'));

        $generator->logs(4);
    }

    public function testSeed()
    {
        $generator = new Generator;

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

final class FooProvider
{
    public function fooFormatter()
    {
        return 'foobar';
    }

    public function fooFormatterWithArguments($value = '')
    {
        return 'baz' . $value;
    }

    public function nums()
    {
        return 'foo::nums';
    }

    public function test($arg = null)
    {
        return "test $arg";
    }

    public function fish($size = 'M')
    {
        return "fish ($size)";
    }

    public function cat($n)
    {
        return "cat $n";
    }
}

final class BarProvider
{
    public function fooFormatter()
    {
        return 'barfoo';
    }
}
