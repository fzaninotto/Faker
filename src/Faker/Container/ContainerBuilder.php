<?php

declare(strict_types=1);

namespace Faker\Container;

use Faker\Core;
use Faker\Extension;

/**
 * @experimental This class is experimental and does not fall under our BC promise
 */
final class ContainerBuilder
{
    /**
     * @var array<string, callable|object|string>
     */
    private array $definitions = [];

    /**
     * @param callable|object|string $value
     *
     * @throws \InvalidArgumentException
     */
    public function add(string $id, $value): self
    {
        if (!is_string($value) && !is_callable($value) && !is_object($value)) {
            throw new \InvalidArgumentException(sprintf(
                'First argument to "%s::add()" must be a string, callable or object.',
                self::class,
            ));
        }

        $this->definitions[$id] = $value;

        return $this;
    }

    public function build(): ContainerInterface
    {
        return new Container($this->definitions);
    }

    /**
     * Get an array with extension that represent the default English
     * functionality.
     */
    public static function defaultExtensions(): array
    {
        return [
            Extension\BarcodeExtension::class => Core\Barcode::class,
            Extension\BloodExtension::class => Core\Blood::class,
            Extension\ColorExtension::class => Core\Color::class,
            Extension\DateTimeExtension::class => Core\DateTime::class,
            Extension\FileExtension::class => Core\File::class,
            Extension\NumberExtension::class => Core\Number::class,
            Extension\UuidExtension::class => Core\Uuid::class,
            Extension\VersionExtension::class => Core\Version::class,
        ];
    }

    public static function getDefault(): ContainerInterface
    {
        $instance = new self();

        foreach (self::defaultExtensions() as $id => $definition) {
            $instance->add($id, $definition);
        }

        return $instance->build();
    }
}
