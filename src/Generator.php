<?php

namespace Faker;

class Generator
{
	protected $providers = array();
	protected $formatters = array();
	
	public function addProvider($providers)
	{
		$this->providers[]= $providers;
	}
	
	public function format($formatter, $arguments = array())
	{
		return call_user_func_array($this->getFormatter($formatter), $arguments);
	}
	
	/**
	 * @return Callable
	 */
	public function getFormatter($formatter)
	{
		if (isset($this->formatters[$formatter])) {
			return $this->formatters[$formatter];
		}
		foreach ($this->providers as $provider) {
			if (method_exists($provider, $formatter)) {
				$this->formatters[$formatter] = array($provider, $formatter);
				return $this->formatters[$formatter];
			}
		}
		throw new \InvalidArgumentException(sprintf('Unknown formatter "%s"', $formatter));
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
	public static function randomElement($array)
	{
		return $array[array_rand($array)];
	}

	/**
	 * Replaces all hash sign ('#') occurrences with a random number
	 *
	 * @param string $string String that needs to bet parsed
	 * @return string
	 */
	public static function numerify($string)
	{
		return preg_replace_callback('/\#/', get_called_class() . '::randomDigit', $string);
	}
	
	/**
	 * Replaces all question mark ('?') occurrences with a random letter
	 *
	 * @param string $string String that needs to bet parsed
	 * @return string
	 */
	public static function lexify($string)
	{
		return preg_replace_callback('/\?/', get_called_class() . '::randomLetter', $string);
	}
	
	/**
	 * Replaces hash signs and question marks with random numbers and letters
	 *
	 * @param string $string String that needs to bet parsed
	 * @return string
	 */
	public static function bothify($string)
	{
		return self::lexify(self::numerify($string));
	}

	/**
	 * Replaces tokens ('{{ tokenName }}') with the result from the token method call
	 *
	 * @param string $string String that needs to bet parsed
	 * @return string
	 */	
	public function parse($string)
	{
		return preg_replace_callback('/\{\{\s?(\w+)\s?\}\}/', array($this, 'callFormatWithMatches'), $string);
	}
	
	protected function callFormatWithMatches($matches)
	{
		return $this->format($matches[1]);
	}
	
	public function __get($attribute)
	{
		return $this->format($attribute);
	}

	public function __call($method, $attributes)
	{
		return $this->format($method, $attributes);
	}

}
