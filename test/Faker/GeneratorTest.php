<?php

namespace Faker\Test;

use Faker\Core\File;
use Faker\Extension\Container;
use Faker\Extension\ExtensionNotFound;
use Faker\Extension\FileExtension;
use Faker\Generator;
use Faker\Provider;
use Faker\UniqueGenerator;

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
        $this->faker->addProvider(new Fixture\Provider\FooProvider());
        $this->faker->addProvider(new Fixture\Provider\BarProvider());
        self::assertEquals('barfoo', $this->faker->format('fooFormatter'));
    }

    public function testGetProvidersReturnsCorrectProviders()
    {
        $this->faker->addProvider(new Fixture\Provider\FooProvider());
        $this->faker->addProvider(new Fixture\Provider\BarProvider());
        self::assertInstanceOf(Fixture\Provider\FooProvider::class, $this->faker->getProviders()[1]);
        self::assertInstanceOf(Fixture\Provider\BarProvider::class, $this->faker->getProviders()[0]);
        self::assertCount(2, $this->faker->getProviders());
    }

    public function testGetFormatterReturnsCallable()
    {
        $this->faker->addProvider(new Fixture\Provider\FooProvider());
        self::assertIsCallable($this->faker->getFormatter('fooFormatter'));
    }

    public function testGetFormatterReturnsCorrectFormatter()
    {
        $provider = new Fixture\Provider\FooProvider();
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
        $this->faker->addProvider(new Fixture\Provider\FooProvider());
        $this->faker->getFormatter('barFormatter');
    }

    public function testFormatCallsFormatterOnProvider()
    {
        $this->faker->addProvider(new Fixture\Provider\FooProvider());
        self::assertEquals('foobar', $this->faker->format('fooFormatter'));
    }

    public function testFormatTransfersArgumentsToFormatter()
    {
        $this->faker = new Generator();
        $provider = new Fixture\Provider\FooProvider();
        $this->faker->addProvider($provider);
        self::assertEquals('bazfoo', $this->faker->format('fooFormatterWithArguments', ['foo']));
    }

    public function testParseReturnsSameStringWhenItContainsNoCurlyBraces()
    {
        self::assertEquals('fooBar#?', $this->faker->parse('fooBar#?'));
    }

    public function testParseReturnsStringWithTokensReplacedByFormatters()
    {
        $this->faker->addProvider(new Fixture\Provider\FooProvider());
        self::assertEquals('This is foobar a text with foobar', $this->faker->parse('This is {{fooFormatter}} a text with {{ fooFormatter }}'));
    }

    /**
     * @group legacy
     */
    public function testMagicGetCallsFormat()
    {
        $this->faker->addProvider(new Fixture\Provider\FooProvider());
        self::assertEquals('foobar', $this->faker->fooFormatter);
    }

    public function testMagicCallCallsFormat()
    {
        $this->faker->addProvider(new Fixture\Provider\FooProvider());
        self::assertEquals('foobar', $this->faker->fooFormatter());
    }

    public function testMagicCallCallsFormatWithArguments()
    {
        $this->faker->addProvider(new Fixture\Provider\FooProvider());
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

    public function testUniqueReturnsUniqueGenerator(): void
    {
        $generator = new Generator();

        $generator->addProvider(new Provider\Base($generator));

        $uniqueGenerator = $generator->unique();

        self::assertInstanceOf(UniqueGenerator::class, $uniqueGenerator);
    }

    public function testUniqueReturnsSameUniqueGeneratorWhenUsedWithoutArguments(): void
    {
        $generator = new Generator();

        $generator->addProvider(new Provider\Base($generator));

        $uniqueGenerator = $generator->unique();

        self::assertSame($uniqueGenerator, $generator->unique());
    }

    public function testUniqueReturnsSameUniqueGeneratorWhenResetIsFalse(): void
    {
        $generator = new Generator();

        $generator->addProvider(new Provider\Base($generator));

        $uniqueGenerator = $generator->unique();

        self::assertSame($uniqueGenerator, $generator->unique(false));
    }

    public function testUniqueReturnsDifferentUniqueGeneratorWhenResetIsTrue(): void
    {
        $generator = new Generator();

        $generator->addProvider(new Provider\Base($generator));

        $uniqueGenerator = $generator->unique();

        self::assertNotSame($uniqueGenerator, $generator->unique(true));
    }

    public function testUniqueReturnsUniqueGeneratorThatGeneratesUniqueValues(): void
    {
        $words = [
            'foo',
            'bar',
            'baz',
        ];

        $generator = new Generator();

        $generator->addProvider(new Provider\Base($generator));
        $generator->addProvider(new class(...$words) {
            private $words;

            public function __construct(string ...$words)
            {
                $this->words = $words;
            }

            public function word(): string
            {
                $key = array_rand($this->words);

                return $this->words[$key];
            }
        });

        $uniqueGenerator = $generator->unique();

        $generatedWords = [
            $uniqueGenerator->word(),
            $uniqueGenerator->word(),
            $uniqueGenerator->word(),
        ];

        self::assertEquals($words, $generatedWords);
    }

    public function testUniqueReturnsUniqueGeneratorThatThrowsWhenItCanNotGenerateUniqueValuesAnymore(): void
    {
        $words = [
            'foo',
        ];

        $maxRetries = 90;

        $generator = new Generator();

        $generator->addProvider(new Provider\Base($generator));
        $generator->addProvider(new class(...$words) {
            private $words;

            public function __construct(string ...$words)
            {
                $this->words = $words;
            }

            public function word(): string
            {
                $key = array_rand($this->words);

                return $this->words[$key];
            }
        });

        $uniqueGenerator = $generator->unique(
            false,
            $maxRetries
        );

        $uniqueGenerator->word();

        $this->expectException(\OverflowException::class);
        $this->expectExceptionMessage(sprintf(
            'Maximum retries of %d reached without finding a unique value',
            $maxRetries
        ));

        $uniqueGenerator->word();
    }
}
