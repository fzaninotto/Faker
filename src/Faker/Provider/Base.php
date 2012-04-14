<?php

namespace Faker\Provider;

class Base
{
	protected $generator;
	
	public function __construct($generator)
	{
		$this->generator = $generator;
	}

	/**
	 * Returns a random number between 0 and 9
	 *
	 * @return integer
	 */
	public static function randomDigit()
	{
		return mt_rand(0, 9);
	}

	/**
	 * Returns a random number between 1 and 9
	 *
	 * @return integer
	 */
	public static function randomDigitNotNull()
	{
		return mt_rand(1, 9);
	}

	/**
	 * Returns a random number with 0 to $nbDigits digits
	 *
	 * @param integer $nbDigits
	 * @example 79907610
	 *
	 * @return integer
	 */
	public static function randomNumber($nbDigits = null)
	{
		if (null === $nbDigits) {
			$nbDigits = static::randomDigit();
		}
		return mt_rand(0, pow(10, $nbDigits) - 1);
	}
	
	/**
	 * Returns a random letter from a to z
	 *
	 * @return string
	 */
	public static function randomLetter()
	{
		return chr(mt_rand(97, 122));
	}

	/**
	 * Returns a random element from a passed array
	 *
	 * @param array $array
	 * @return mixed
	 */	
	public static function randomElement($array = array('a', 'b', 'c'))
	{
		return $array[mt_rand(0, count($array) - 1)];
	}

	/**
	 * Replaces all hash sign ('#') occurrences with a random number
	 * Replaces all percentage sign ('%') occurrences with a not null number
	 *
	 * @param string $string String that needs to bet parsed
	 * @return string
	 */
	public static function numerify($string = '###')
	{
		$string = preg_replace_callback('/\#/', 'static::randomDigit', $string);
		$string = preg_replace_callback('/\%/', 'static::randomDigitNotNull', $string);
		
		return $string;
	}
	
	/**
	 * Replaces all question mark ('?') occurrences with a random letter
	 *
	 * @param string $string String that needs to bet parsed
	 * @return string
	 */
	public static function lexify($string = '????')
	{
		return preg_replace_callback('/\?/', 'static::randomLetter', $string);
	}
	
	/**
	 * Replaces hash signs and question marks with random numbers and letters
	 *
	 * @param string $string String that needs to bet parsed
	 * @return string
	 */
	public static function bothify($string = '## ??')
	{
		return static::lexify(static::numerify($string));
	}
	
}