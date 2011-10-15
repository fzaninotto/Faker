<?php

namespace Faker;

class Documentor
{
	protected $generator;
	
	public function __construct($generator)
	{
		$this->generator = $generator;
	}
	
	public function getFormatters()
	{
		$formatters = array();
		foreach ($this->generator->getProviders() as $provider) {
			$providerClass = get_class($provider);
			$formatters[$providerClass] = array();
			$refl = new \ReflectionObject($provider);
			foreach ($refl->getMethods(\ReflectionMethod::IS_PUBLIC) as $reflmethod) {
				$methodName = $reflmethod->name;
				if ($methodName == '__construct') {
					continue;
				}
				$example = $this->generator->format($methodName);
				if (is_array($example)) {
					$example = 'array('. join(', ', $example) . ')';
				}
				if (is_string($example)) {
					$example = var_export($example, true);
				}
				$formatters[$providerClass][$methodName] = $example;
			}
			ksort($formatters[$providerClass]);
		}
		ksort($formatters);
		
		return $formatters;
	}
	
}
