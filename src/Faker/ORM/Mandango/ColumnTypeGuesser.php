<?php

namespace Faker\ORM\Mandango;

class ColumnTypeGuesser
{
    protected \Faker\Generator $generator;

    public function __construct(\Faker\Generator $generator)
    {
        $this->generator = $generator;
    }

    public function guessFormat($field): ?\Closure
    {
        $generator = $this->generator;

        return match ($field['type']) {
            'boolean' => static function() use ($generator) {
                return $generator->boolean;
            },
            'integer' => static function() {
                return \random_int(0, 4294967295);
            },
            'float' => static function() {
                return \random_int(0, 4294967295) / \random_int(1, 4294967295);
            },
            'string' => static function() use ($generator) {
                return $generator->text(255);
            },
            'date' => static function() use ($generator) {
                return $generator->datetime;
            },
            default => null,
        };
    }
}
