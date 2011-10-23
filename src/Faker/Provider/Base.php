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
	protected static function randomDigit()
	{
		return mt_rand(0, 9);
	}

	/**
	 * Returns a random number with 0 to $nbDigits digits
	 *
	 * @param integer $nbDigits
	 *
	 * @return integer
	 */
	protected static function randomNumber($nbDigits = 3)
	{
		return mt_rand(0, $nbDigits * 10);
	}
	
	/**
	 * Returns a random letter from a to z
	 *
	 * @return string
	 */
	protected static function randomLetter()
	{
		return chr(mt_rand(97, 122));
	}

	/**
	 * Returns a random element from a passed array
	 *
	 * @param array $array
	 * @return mixed
	 */	
	protected static function randomElement($array)
	{
		return $array[mt_rand(0, count($array) - 1)];
	}

	/**
	 * Replaces all hash sign ('#') occurrences with a random number
	 *
	 * @param string $string String that needs to bet parsed
	 * @return string
	 */
	protected static function numerify($string)
	{
		return preg_replace_callback('/\#/', 'static::randomDigit', $string);
	}
	
	/**
	 * Replaces all question mark ('?') occurrences with a random letter
	 *
	 * @param string $string String that needs to bet parsed
	 * @return string
	 */
	protected static function lexify($string)
	{
		return preg_replace_callback('/\?/', 'static::randomLetter', $string);
	}
	
	/**
	 * Replaces hash signs and question marks with random numbers and letters
	 *
	 * @param string $string String that needs to bet parsed
	 * @return string
	 */
	protected static function bothify($string)
	{
		return static::lexify(static::numerify($string));
	}
	
}