<?php

declare(strict_types=1);

namespace Faker\Test\Extension;

use Faker\Core\File;
use Faker\Extension\ContainerBuilder;
use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;

/**
 * @covers \Faker\Extension\ContainerBuilder
 */
final class ContainerBuilderTest extends TestCase
{
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
