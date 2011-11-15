<?php

namespace Faker\ORM\Doctrine;

use Doctrine\Common\Persistence\Mapping\ClassMetadata;
use Doctrine\Common\Annotations\AnnotationReader;

class ColumnTypeGuesser
{
	protected $generator;
    /**
     * @var AnnotationReader
     */
    protected $reader;

    public function __construct(\Faker\Generator $generator)
	{
		$this->generator = $generator;
        $this->reader = new AnnotationReader();
	}

	public function guessFormat($fieldName, ClassMetadata $class)
	{
		$generator = $this->generator;
		$type = $class->getTypeOfField($fieldName);
        
        $annotationName = 'Faker\ORM\Doctrine\Annotations\Fake';
        $fake = $this->reader->getPropertyAnnotation($class->getReflectionProperty($fieldName), $annotationName);
        if(!empty ($fake)) {
            if(!empty ($fake->value)) {
                return function() use ($generator, $fake) {
                    return eval("return \$generator->{$fake->value};");
                };
            } elseif(!empty ($fake->enum)) {
                $keys = array_keys(call_user_func(array($class->reflClass->getName(), $fake->enum)));
                return function() use ($generator, $keys) {
                    return $generator->randomElement($keys);
                };
            }
        }
        
		switch ($type) {
			case 'boolean':
				return function() use ($generator) { return $generator->boolean; };
			case 'decimal':
				$size = isset($class->fieldMappings[$fieldName]['precision']) ? $class->fieldMappings[$fieldName]['precision'] : 2;
				return function() use ($generator, $size) { return $generator->randomNumber($size + 2) / 100; };
			case 'smallint':
				return function() { return mt_rand(0,65535); };
			case 'integer':
				return function() { return mt_rand(0,4294967295); };
			case 'bigint':
				return function() { return mt_rand(0,18446744073709551615); };
			case 'float':
				return function() { return mt_rand(0,4294967295)/mt_rand(1,4294967295); };
			case 'string':
				$size = isset($class->fieldMappings[$fieldName]['length']) ? $class->fieldMappings[$fieldName]['length'] : 255;
				return function() use ($generator, $size) { return $generator->text($size); };
			case 'text':
				return function() use ($generator) { return $generator->text; };
			case 'datetime':
			case 'date':
		        case 'time':
				return function() use ($generator) { return $generator->datetime; };
			default:
				// no smart way to guess what the user expects here
				return null;
		}
	}
}