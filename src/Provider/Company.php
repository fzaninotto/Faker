<?php

namespace Faker\Provider;

require_once __DIR__ . '/Base.php';

class Company extends \Faker\Provider\Base
{
	protected static $formats = array(
		'{{lastName}} {{companySuffix}}',
	);

	protected static $companySuffix = array('Ltd');

	/**
	 * @example 'Acme Ltd'
	 */
	public function company()
	{
		$format = static::randomElement(static::$formats);
		return $this->generator->parse($format);
	}

	/**
	 * @example 'Ltd'
	 */
	public static function companySuffix()
	{
		return static::randomElement(static::$companySuffix);
	}
	
}