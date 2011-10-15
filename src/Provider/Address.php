<?php

namespace Faker\Provider;

class Address
{
	protected static $citySuffix = array('Ville');
	protected static $cityFormats = array(
		'{{firstName}}{{citySuffix}}',
	);
	protected static $streetNameFormats = array(
		'{{lastName}} {{streetSuffix}}'
	);
	protected static $streetAddressFormats = array(
		'{{buildingNumber}} {{streetName}}'
	);
	protected static $addressFormats = array(
		'{{streetAddress}} {{postcode}} {{city}}',
	);

	protected static $buildingNumber = array('##');
	protected static $streetSuffix = array('Street');
	protected static $postcode = array('#####');
	protected static $country = array();
	
	protected $generator;
	
	public function __construct($generator)
	{
		$this->generator = $generator;
	}

	public static function citySuffix()
	{
		return static::$citySuffix[array_rand(static::$citySuffix)];
	}

	public static function streetSuffix()
	{
		return static::$streetSuffix[array_rand(static::$streetSuffix)];
	}

	public function buildingNumber()
	{
		$format = static::$buildingNumber[array_rand(static::$buildingNumber)];
		return $this->generator->numerify($format);
	}

	public function city()
	{
		$format = static::$cityFormats[array_rand(static::$cityFormats)];
		return $this->generator->parse($format);
	}
	
	public function streetName()
	{
		$format = static::$streetNameFormats[array_rand(static::$streetNameFormats)];
		return $this->generator->parse($format);
	}
	
	public function streetAddress()
	{
		$format = static::$streetAddressFormats[array_rand(static::$streetAddressFormats)];
		return $this->generator->numerify($this->generator->parse($format));
	}
	
	public function postcode()
	{
		$format = static::$postcode[array_rand(static::$postcode)];
		return $this->generator->numerify($format);
	}

	public function address()
	{
		$format = static::$addressFormats[array_rand(static::$addressFormats)];
		return $this->generator->parse($format);
	}

	public static function country()
	{
		return static::$country[array_rand(static::$country)];
	}
	
}