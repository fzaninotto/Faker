<?php

namespace Faker\ORM\Mandango;

class ColumnTypeGuesser
{
    protected $generator;

    public function __construct(\Faker\Generator $generator)
    {
        $this->generator = $generator;
    }

    public function guessFormat($field)
    {
        $generator = $this->generator;
        switch ($field['type']) {
            case 'boolean':
                return function() use ($generator) { return $generator->boolean; };
            case 'integer':
                return function() { return mt_rand(0,intval('4294967295')); };
            case 'float':
                return function() { return mt_rand(0,intval('4294967295'))/mt_rand(1,intval('4294967295')); };
            case 'string':
                return function() use ($generator) { return $generator->text(255); };
            case 'date':
                return function() use ($generator) { return $generator->datetime; };
            default:
                // no smart way to guess what the user expects here
                return null;
        }
    }
}
