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

	protected static $companySuffix = array('SA', 'S.A.', 'SARL', 'S.A.R.L.', 'S.A.S.', 'et Fils');

	protected static $sirenFormat = "### ### ###";

	/**
	 * Generates a siret number (14 digits).
	 * It is in fact the result of the concatenation of a siren number (9 digits),
	 * a sequential number (4 digits) and a control number (1 digit) concatenation.
	 * If $maxSequentialDigits is invalid, it is set to 2.
	 *
	 * @param int $maxSequentialDigits The maximum number of digits for the sequential number (> 0 && <= 4).
	 *
	 * @return string
	 */
	public static function siret($maxSequentialDigits = 2)
	{
		if ($maxSequentialDigits > 4 || $maxSequentialDigits <= 0) {
			$maxSequentialDigits = 2;
		}

		$sequentialNumber = str_pad(static::randomNumber($maxSequentialDigits), 4, '0', STR_PAD_LEFT);

		return  static::numerify(static::siren() . ' ' . $sequentialNumber . '#');
	}

        /**
         * Generates a siren number (9 digits).
         *
         * @return string
         */
	public static function siren()
	{
		return static::numerify(static::$sirenFormat);
	}
}