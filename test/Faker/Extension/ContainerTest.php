<?php

declare(strict_types=1);

namespace Faker\Test\Extension;

use Faker\Container\Container;
use Faker\Core\File;
use Faker\Extension\Extension;
use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * @covers \Faker\Container\Container
 */
final class ContainerTest extends TestCase
{
    public function testHasReturnsFalseWhenContainerDoesNotHaveDefinitionForService(): void
    {
        $container = new Container([]);

        self::assertFalse($container->has('foo'));
    }

    public function testGetThrowsNotFoundExceptionWhenContainerDoesNotHaveDefinitionForService(): void
    {
        $container = new Container([]);

        $this->expectException(NotFoundExceptionInterface::class);

        $container->get('foo');
    }

    public function testGetFromString(): void
    {
        $container = new Container([
            'file' => File::class,
        ]);

        $object = $container->get('file');

        self::assertInstanceOf(File::class, $object);
    }

    /**
     * @dataProvider provideDefinitionThatDoesNotResolveToExtension
     */
    public function testGetThrowsRuntimeExceptionWhenServiceResolvedForIdentifierIsNotAnExtension($definition): void
    {
        $id = 'file';

        $container = new Container([
            $id => $definition,
        ]);

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage(sprintf(
            'Service resolved for identifier "%s" does not implement the %s" interface.',
            $id,
            Extension::class,
        ));

        $container->get($id);
    }

    /**
     * @return \Generator<string, array{0: callable|object|string}>
     */
    public function provideDefinitionThatDoesNotResolveToExtension(): \Generator
    {
        $definitions = [
            'callable' => static function (): \stdClass {
                return new \stdClass();
            },
            'object' => new \stdClass(),
            'string' => \stdClass::class,
        ];

        foreach ($definitions as $key => $definition) {
            yield $key => [
                $definition,
            ];
        }
    }

    public function testGetFromNoClassString(): void
    {
        $container = new Container([
            'file' => 'this is not a class',
        ]);

        $this->expectException(ContainerExceptionInterface::class);

        $container->get('file');
    }

    public function testGetFromCallable(): void
    {
        $container = new Container([
            'file' => static function () {
                return new File();
            },
        ]);

        $object = $container->get('file');

        self::assertInstanceOf(File::class, $object);
    }

    public function testGetFromObject(): void
    {
        $container = new Container([
            'file' => new File(),
        ]);

        $object = $container->get('file');

        self::assertInstanceOf(File::class, $object);
    }

    public function testGetFromNull(): void
    {
        $container = new Container([
            'file' => null,
        ]);

        $this->expectException(ContainerExceptionInterface::class);

        $container->get('file');
    }

    public function testGetSameObject(): void
    {
        $container = new Container([
            'file' => File::class,
        ]);

        $service = $container->get('file');

        self::assertSame($service, $container->get('file'), 'The container should only instantiate a service once.');
    }
}
