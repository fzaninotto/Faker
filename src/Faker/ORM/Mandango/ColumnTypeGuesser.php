<?php

namespace Faker\ORM\Mandango;

use Faker\Generator;

class ColumnTypeGuesser
{
    /**
     * @var Generator
     */
    protected $generator;

    /**
     * @param Generator $generator
     */
    public function __construct(Generator $generator)
    {
        $this->generator = $generator;
    }

    /**
     * @return \Closure|null
     */
    public function guessFormat($field)
    {
        $generator = $this->generator;
        switch ($field['type']) {
            case 'boolean':
                return function () use ($generator) {
                    return $generator->boolean;
                };
            case 'integer':
                return function () use ($generator) {
                    return $generator->numberBetween(0, 4294967295);
                };
            case 'float':
                return function () use ($generator) {
                    return $generator->randomFloat();
                };
            case 'string':
                return function () use ($generator) {
                    return $generator->text(255);
                };
            case 'date':
                return function () use ($generator) {
                    return $generator->dateTime;
                };
            default:
                // no smart way to guess what the user expects here
                return null;
        }
    }
}
