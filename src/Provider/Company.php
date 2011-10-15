<?php

namespace Faker\Provider;

class Company
{
	protected static $formats = array(
		'{{lastName}} {{companySuffix}}',
	);

	protected static $companySuffix = array('Ltd');

	protected $generator;
	
	public function __construct($generator)
	{
		$this->generator = $generator;
	}

	public function company()
	{
		$format = static::$formats[array_rand(static::$formats)];
		return $this->generator->parse($format);
	}
	
	public function companySuffix()
	{
		return static::$companySuffix[array_rand(static::$companySuffix)];;
	}
	
}