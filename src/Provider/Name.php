<?php

namespace Faker\Provider;

class Name
{
	protected static $formats = array(
		'{{firstName}} {{lastName}}',
	);
	
	protected static $firstName = array('John', 'Jane');
	
	protected static $lastName = array('Doe');
		
	protected $generator;
	
	public function __construct($generator)
	{
		$this->generator = $generator;
	}

	public function name()
	{
		$format = static::$formats[array_rand(static::$formats)];
		return $this->generator->parse($format);
	}
	
	public static function firstName()
	{
		return static::$firstName[array_rand(static::$firstName)];
	}
	
	public static function lastName()
	{
		return static::$lastName[array_rand(static::$lastName)];
	}
	
}