<?php

namespace Faker\Provider\pt_BR;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{

	protected static $landlineFormats = array('2###-####', '3###-####');

	protected static $cellphoneFormats = array('7###-####', '8###-####', '9###-####');

	/**
	 * Extracted from http://portal.embratel.com.br/embratel/9-digito/ (point 11)
	 */
	protected static $ninthDigitAreaCodes = array(
		11, 12, 13, 14, 15, 16, 17, 18, 19,
		21, 22, 24, 27, 28,
	);

	/**
	 * Generates a 2-digit area code not composed by zeroes.
	 * @return string
	 */
	public function areaCode()
	{
		return static::randomDigitNotNull().static::randomDigitNotNull();
	}

	/**
	 * Generates a 8/9-digit cellphone number without formatting characters.
	 * @param bool $dash  [def: true] If it should return a formatted number or not.
	 * @param bool $ninth [def: false] If the number should have a nine in the beginning or not.
	 *                    If the generated number begins with 7 this is ignored.
	 * @return string
	 */
	public static function cellphone($dash = true, $ninth = false)
	{
		$number = static::numerify(static::randomElement(static::$cellphoneFormats));

		if ($ninth && $number[0] != 7)
			$number = "9$number";

		if (!$dash)
			$number = strtr($number, array('-' => ''));

		return $number;
	}

	/**
	 * Generates an 8-digit landline number without formatting characters.
	 * @param bool $dash [def: true] If it should return a formatted number or not.
	 * @return string
	 */
	public static function landline($dash = true)
	{
		$number = static::numerify(static::randomElement(static::$landlineFormats));

		if (!$dash)
			$number = strtr($number, array('-' => ''));

		return $number;
	}

	/**
	 * Randomizes between cellphone and landline numbers.
	 * @param bool $formatted [def: true] If it should return a formatted number or not.
	 * @return mixed
	 */
	public static function phone($formatted = true)
	{
		return static::randomElement(array(
			static::cellphone($formatted, false),
			static::cellphone($formatted, true),
			static::landline($formatted)
		));
	}

	/**
	 * Generates a complete phone number.
	 * @param string $type      One of "landline" or "cellphone". Default: "landline" if invalid value is given.
	 * @param bool   $formatted If the number should be formatted or not.
	 * @return string
	 */
	protected static function anyPhoneNumber($type, $formatted)
	{
		$area   = static::areaCode();
		$number = ($type == 'cellphone')?
			static::cellphone($formatted, in_array($area, static::$ninthDigitAreaCodes)) :
			static::landline($formatted);

		return $formatted? "($area) $number" : $area.$number;
	}

	/**
	 * Concatenates {@link areaCode} and {@link cellphone} into a national cellphone number. The ninth digit is
	 * derived from the area code.
	 * @param bool $formatted [def: true] If it should return a formatted number or not.
	 * @return string
	 */
	public static function cellphoneNumber($formatted = true)
	{
		return static::anyPhoneNumber('cellphone', $formatted);
	}

	/**
	 * Concatenates {@link areaCode} and {@link landline} into a national landline number.
	 * @param bool $formatted [def: true] If it should return a formatted number or not.
	 * @return string
	 */
	public static function landlineNumber($formatted = true)
	{
		return static::anyPhoneNumber('landline', $formatted);
	}

	/**
	 * Randomizes between complete cellphone and landline numbers.
	 * @param bool $formatted [def: true] If it should return a formatted number or not.
	 * @return mixed
	 */
	public static function phoneNumber($formatted = true)
	{
		return static::randomElement(array(
			static::cellphoneNumber($formatted, false),
			static::cellphoneNumber($formatted, true),
			static::landlineNumber($formatted)
		));
	}
}