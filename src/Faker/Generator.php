<?php

namespace Faker;

class Generator
{
	protected $providers = array();
	protected $formatters = array();
	
	public function addProvider($provider)
	{
		array_unshift($this->providers, $provider);
	}
	
	public function getProviders()
	{
		return $this->providers;
	}
	
	public function seed($seed = null)
	{
		mt_srand($seed);
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
