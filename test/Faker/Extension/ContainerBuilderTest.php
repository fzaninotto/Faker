<?php

declare(strict_types=1);

namespace Faker\Test\Extension;

use Faker\Container\ContainerBuilder;
use Faker\Container\ContainerInterface;
use Faker\Core\File;
use Faker\Extension\Extension;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Faker\Container\ContainerBuilder
 */
final class ContainerBuilderTest extends TestCase
{
    /**
     * @dataProvider provideInvalidValue
     *
     * @param array|bool|float|int|resource|null $value
     */
    public function testAddRejectsInvalidValue($value): void
    {
        $containerBuilder = new ContainerBuilder();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(sprintf(
            'First argument to "%s::add()" must be a string, callable or object.',
            ContainerBuilder::class,
        ));

        $containerBuilder->add($value);
    }

    /**
     * @return \Generator<string, array{0: array|bool|float|int|resource|null}>
     */
    public function provideInvalidValue(): \Generator
    {
        $values = [
            'array' => [
                'foo',
                'bar',
                'baz',
            ],
            'bool-false' => false,
            'bool-true' => true,
            'float' => 3.14,
            'int' => 9001,
            'null' => true,
            'resource' => fopen(__FILE__, 'rb'),
        ];

        foreach ($values as $key => $value) {
            yield $key => [
                $value,
            ];
        }
    }

    public function testAddRejectsNameWhenValueIsCallableAndNameIsNull(): void
    {
        $value = [
            new class() {
                public static function create(): Extension
                {
                    return new class() implements Extension {
                    };
                }
            },
            'create',
        ];

        $containerBuilder = new ContainerBuilder();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(sprintf(
            'Second argument to "%s::add()" is required not passing a string or object as first argument',
            ContainerBuilder::class,
        ));

        $containerBuilder->add($value);
    }

    public function testAddAcceptsValueWhenItIsAnObjectAndNameIsNull(): void
    {
        $value = new class() implements Extension {};

        $name = get_class($value);

        $containerBuilder = new ContainerBuilder();

        $containerBuilder->add($value);

        $container = $containerBuilder->build();

        self::assertTrue($container->has($name));
        self::assertSame($value, $container->get($name));
    }

    public function testBuildEmpty(): void
    {
        $builder = new ContainerBuilder();

        $container = $builder->build();

        self::assertInstanceOf(ContainerInterface::class, $container);
    }

    public function testBuild(): void
    {
        $builder = new ContainerBuilder();

        $builder->add(File::class);

        $container = $builder->build();

        self::assertInstanceOf(ContainerInterface::class, $container);
    }

    public function testBuildWithDuplicates(): void
    {
        $builder = new ContainerBuilder();

        $builder->add(File::class);
        $builder->add(File::class);

        $container = $builder->build();

        self::assertInstanceOf(ContainerInterface::class, $container);
    }

    public function testBuildWithObject(): void
    {
        $builder = new ContainerBuilder();

        $builder->add(new File(), 'foo');

        $container = $builder->build();

        self::assertInstanceOf(ContainerInterface::class, $container);
    }

    public function testBuildWithCallable(): void
    {
        $builder = new ContainerBuilder();

        $builder->add(static function () {
            return new File();
        }, 'foo');

        $container = $builder->build();

        self::assertInstanceOf(ContainerInterface::class, $container);
    }

    public function testBuildDefault(): void
    {
        $container = ContainerBuilder::getDefault();

        self::assertInstanceOf(ContainerInterface::class, $container);
    }
}
