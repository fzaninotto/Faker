<?php

namespace Faker\ORM\CakePHP;

class ColumnTypeGuesser
{
    protected \Faker\Generator $generator;

    public function __construct(\Faker\Generator $generator)
    {
        $this->generator = $generator;
    }

    public function guessFormat($column, $table): ?\Closure
    {
        $generator = $this->generator;
        $schema = $table->schema();

        switch ($schema->columnType($column)) {
            case 'boolean':
                return static function() use ($generator) {
                    return $generator->boolean;
                };
            case 'integer':
                return static function() {
                    return \random_int(0, 2147483647);
                };
            case 'biginteger':
                return static function() {
                    return \random_int(0, 9223372036854775807);
                };
            case 'decimal':
            case 'float':
                return static function() use ($generator) {
                    return $generator->randomFloat();
                };
            case 'uuid':
                return static function() use ($generator) {
                    return $generator->uuid();
                };
            case 'string':
                if (\method_exists($schema, 'getColumn')) {
                    $columnData = $schema->getColumn($column);
                } else {
                    $columnData = $schema->column($column);
                }
                $length = $columnData['length'];

                return static function() use ($generator, $length) {
                    return $generator->text($length);
                };
            case 'text':
                return static function() use ($generator) {
                    return $generator->text();
                };
            case 'date':
            case 'datetime':
            case 'timestamp':
            case 'time':
                return static function() use ($generator) {
                    return $generator->datetime();
                };

            case 'binary':
            default:
                return null;
        }
    }
}
