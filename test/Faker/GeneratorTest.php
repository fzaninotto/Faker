<?php

namespace Faker\Test;

use Faker\Core\File;
use Faker\Extension\Container;
use Faker\Extension\ExtensionNotFound;
use Faker\Extension\FileExtension;
use Faker\Generator;

/**
 * @covers \Faker\Generator
 */
final class GeneratorTest extends TestCase
{
    public function testExtReturnsAnExtensionWhenContainerHasACorrespondingDefinition(): void
    {
        $generator = new Generator(new Container([
            'file' => File::class,
        ]));

        $ext = $generator->ext('file');

        self::assertInstanceOf(File::class, $ext);
    }

    public function testExtThrowsAnExtensionNotFoundExceptionWhenContainerDoesNotHaveACorrespondingDefinition(): void
    {
        $generator = new Generator(new Container([]));

        $this->expectException(ExtensionNotFound::class);

        $generator->ext('foobar');
    }

    public function testConstructorBuildsDefaultExtensions(): void
    {
        $generator = new Generator();

        $ext = $generator->ext(FileExtension::class);

        self::assertInstanceOf(FileExtension::class, $ext);
        self::assertInstanceOf(File::class, $ext);
    }

    public function testMimeType(): void
    {
        $generator = new Generator();

        $mime = $generator->mimeType();

        self::assertMatchesRegularExpression('|.*/.*|', $mime);
    }

    public function testAddProviderGivesPriorityToNewlyAddedProvider()
    {
        $this->faker->addProvider(new FooProvider());
        $this->faker->addProvider(new BarProvider());
        self::assertEquals('barfoo', $this->faker->format('fooFormatter'));
    }

    public function testGetProvidersReturnsCorrectProviders()
    {
        $this->faker->addProvider(new FooProvider());
        $this->faker->addProvider(new BarProvider());
        self::assertInstanceOf(FooProvider::class, $this->faker->getProviders()[1]);
        self::assertInstanceOf(BarProvider::class, $this->faker->getProviders()[0]);
        self::assertCount(2, $this->faker->getProviders());
    }

    public function testGetFormatterReturnsCallable()
    {
        $this->faker->addProvider(new FooProvider());
        self::assertIsCallable($this->faker->getFormatter('fooFormatter'));
    }

    public function testGetFormatterReturnsCorrectFormatter()
    {
        $provider = new FooProvider();
        $this->faker->addProvider($provider);
        $expected = [$provider, 'fooFormatter'];
        self::assertEquals($expected, $this->faker->getFormatter('fooFormatter'));
    }

    public function testGetFormatterThrowsExceptionOnIncorrectProvider()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->getFormatter('fooFormatter');
    }

    public function testGetFormatterThrowsExceptionOnIncorrectFormatter()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->addProvider(new FooProvider());
        $this->faker->getFormatter('barFormatter');
    }

    public function testFormatCallsFormatterOnProvider()
    {
        $this->faker->addProvider(new FooProvider());
        self::assertEquals('foobar', $this->faker->format('fooFormatter'));
    }

    public function testFormatTransfersArgumentsToFormatter()
    {
        $this->faker = new Generator();
        $provider = new FooProvider();
        $this->faker->addProvider($provider);
        self::assertEquals('bazfoo', $this->faker->format('fooFormatterWithArguments', ['foo']));
    }

    public function testParseReturnsSameStringWhenItContainsNoCurlyBraces()
    {
        self::assertEquals('fooBar#?', $this->faker->parse('fooBar#?'));
    }

    public function testParseReturnsStringWithTokensReplacedByFormatters()
    {
        $this->faker->addProvider(new FooProvider());
        self::assertEquals('This is foobar a text with foobar', $this->faker->parse('This is {{fooFormatter}} a text with {{ fooFormatter }}'));
    }

    /**
     * @group legacy
     */
    public function testMagicGetCallsFormat()
    {
        $this->faker->addProvider(new FooProvider());
        self::assertEquals('foobar', $this->faker->fooFormatter);
    }

    public function testMagicCallCallsFormat()
    {
        $this->faker->addProvider(new FooProvider());
        self::assertEquals('foobar', $this->faker->fooFormatter());
    }

    public function testMagicCallCallsFormatWithArguments()
    {
        $this->faker->addProvider(new FooProvider());
        self::assertEquals('bazfoo', $this->faker->fooFormatterWithArguments('foo'));
    }

    public function testSeed()
    {
        $this->faker->seed(0);
        $mtRandWithSeedZero = mt_rand();
        $this->faker->seed(0);
        self::assertEquals($mtRandWithSeedZero, mt_rand(), 'seed(0) should be deterministic.');

        $this->faker->seed();
        $mtRandWithoutSeed = mt_rand();
        self::assertNotEquals($mtRandWithSeedZero, $mtRandWithoutSeed, 'seed() should be different than seed(0)');
        $this->faker->seed();
        self::assertNotEquals($mtRandWithoutSeed, mt_rand(), 'seed() should not be deterministic.');

        $this->faker->seed('10');
        self::assertTrue(true, 'seeding with a non int value doesn\'t throw an exception');
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
}

final class BarProvider
{
    public function fooFormatter()
    {
        return 'barfoo';
    }
}
