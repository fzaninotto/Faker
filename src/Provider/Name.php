<?php

namespace Faker\Provider;

require_once __DIR__ . '/Base.php';

class Name extends \Faker\Provider\Base
{
	protected static $formats = array(
		'{{firstName}} {{lastName}}',
	);
	
	protected static $firstName = array('John', 'Jane');
	
	protected static $lastName = array('Doe');
		
	public function name()
	{
		$format = static::randomElement(static::$formats);
		return $this->generator->parse($format);
	}
	
	public static function firstName()
	{
		return static::randomElement(static::$firstName);
	}
	
	public static function lastName()
	{
		return static::randomElement(static::$lastName);
	}
	
}