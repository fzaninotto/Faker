<?php

namespace Faker\Provider;

require_once __DIR__ . '/Base.php';

class PhoneNumber extends \Faker\Provider\Base
{
	protected static $formats = array('###-###-###');
	
	public static function phoneNumber()
	{
		return static::numerify(static::randomElement(static::$formats));
	}
}