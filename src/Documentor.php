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
				if ($reflmethod->name == '__construct') {
					continue;
				}
				$comment = $reflmethod->getDocComment();
				if (preg_match('/^\s+\*\s+@example\s+(.*)$/mi', $comment, $matches)) {
					$example = $matches[1];
				} else {
					$example = '';
				}
				$formatters[$providerClass][$reflmethod->name] = $example;
			}
			ksort($formatters[$providerClass]);
		}
		ksort($formatters);
		
		return $formatters;
	}
	
}
