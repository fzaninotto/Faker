<?php

namespace Faker;

require_once __DIR__ . '/Generator.php';
require_once __DIR__ . '/Provider/Name.php';
require_once __DIR__ . '/Provider/Address.php';
require_once __DIR__ . '/Provider/PhoneNumber.php';
require_once __DIR__ . '/Provider/Company.php';
require_once __DIR__ . '/Provider/Lorem.php';

class Factory
{
	public static function create()
	{
		$generator = new Generator();
		$generator->addProvider(new Provider\Name($generator));
		$generator->addProvider(new Provider\Address($generator));
		$generator->addProvider(new Provider\PhoneNumber($generator));
		$generator->addProvider(new Provider\Company($generator));
		$generator->addProvider(new Provider\Lorem($generator));
		
		return $generator;
	}
}
