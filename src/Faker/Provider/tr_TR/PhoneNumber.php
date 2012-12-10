<?php

namespace Faker\Provider\tr_TR;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
	protected static $formats = array('0##########','05#########');

	/**
	 * @example '05544397503'
	 */
	public static function phoneNumber()
	{
		return static::numerify(static::randomElement(static::$formats));
	}
}
