<?php

namespace Faker\Provider\en_US;

class PhoneNumber
{
	protected static $formats = array(
		'+##(#)##########',
		'+##(#)##########',
		'0##########',
		'0##########',
		'###-###-####',
		'(###)###-####',
		'1-###-###-####',
		'###.###.####',
		'###-###-####',
		'(###)###-####',
		'1-###-###-####',
		'###.###.####',
		'###-###-####x###',
		'(###)###-####x###',
		'1-###-###-####x###',
		'###.###.####x###',
		'###-###-####x####',
		'(###)###-####x####',
		'1-###-###-####x####',
		'###.###.####x####',
		'###-###-####x#####',
		'(###)###-####x#####',
		'1-###-###-####x#####',
		'###.###.####x#####'
	);
	
	protected $generator;
	
	public function __construct($generator)
	{
		$this->generator = $generator;
	}
	
	public function phoneNumber()
	{
		return $this->generator->numerify(self::$formats[array_rand(self::$formats)]);
	}
}