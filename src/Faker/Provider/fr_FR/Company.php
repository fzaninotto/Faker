<?php

namespace Faker\Provider\fr_FR;

class Company extends \Faker\Provider\Company
{
	protected static $formats = array(
		'{{lastName}} {{companySuffix}}',
		'{{lastName}} {{lastName}} {{companySuffix}}',
		'{{lastName}}',
		'{{lastName}}',
	);

	protected static $companySuffix = array('SA', 'S.A.', 'SARL', 'S.A.R.L.', 'S.A.S.');

	protected static $sirenFormat = "### ### ###";

	public static function siret($maxSequentialDigits = 2)
	{
		if ($maxSequentialDigits > 4 || $maxSequentialDigits <= 0) {
			$maxSequentialDigits = 2;
		}

		$sequentialNumber = str_pad(static::randomNumber($maxSequentialDigits), 4, '0', STR_PAD_LEFT);

		return  static::numerify(static::siren() . ' ' . $sequentialNumber . '#');
	}

	public static function siren()
	{
		return static::numerify(static::$sirenFormat);
	}
}