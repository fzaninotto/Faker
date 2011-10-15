<?php

namespace Faker\Provider\Base;

class PhoneNumber
{
	protected static $formats = array('###-###-###');
	
	protected $generator;
	
	public function __construct($generator)
	{
		$this->generator = $generator;
	}
	
	public function phoneNumber()
	{
		return $this->generator->numerify(static::$formats[array_rand(static::$formats)]);
	}
}