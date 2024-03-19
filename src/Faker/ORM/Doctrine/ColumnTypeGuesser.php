<?php

namespace Faker\ORM\Doctrine;

use Doctrine\Persistence\Mapping\ClassMetadata;
use Faker\Generator;

class ColumnTypeGuesser
{
    public function __construct(protected Generator $generator)
    {
    }

    public function guessFormat(string $fieldName, ClassMetadata $class): ?callable
    {
        $generator = $this->generator;
        $type = $class->getTypeOfField($fieldName);
        switch ($type) {
            case 'boolean':
                return static fn() => $generator->boolean;
            case 'decimal':
                $size = $class->fieldMappings[$fieldName]['precision'] ?? 2;

                return static fn() => $generator->randomNumber($size + 2) / 100;
            case 'smallint':
                return static fn() => \random_int(0, 65535);
            case 'integer':
                return static fn() => \random_int(0, 2147483647);
            case 'bigint':
                return static fn() => \random_int(0, 18446744073709551615);
            case 'float':
                return static fn() => \random_int(0, 4294967295 / \random_int(1, 4294967295));
            case 'string':
                $size = $class->fieldMappings[$fieldName]['length'] ?? 255;

                return static fn() => $generator->text($size);
            case 'text':
                return static fn() => $generator->text;
            case 'datetime':
            case 'date':
            case 'time':
                return static fn() => $generator->datetime;
            case 'datetime_immutable':
            case 'date_immutable':
            case 'time_immutable':
                return static fn() => \DateTimeImmutable::createFromMutable($generator->datetime);
            default:
                // no smart way to guess what the user expects here
                return null;
        }
    }
}
