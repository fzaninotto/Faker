<?php

namespace Faker\Provider\fr_FR;

class Address extends \Faker\Provider\Address
{
	protected static $citySuffix = array('Ville', 'Bourg', '-les-Bains', '-sur-Mer', '-la-Forêt', 'boeuf', 'nec', 'dan');
	protected static $streetPrefix = array('rue', 'rue', 'chemin', 'avenue', 'boulevard');
	protected static $cityFormats = array(
		'{{lastName}}',
		'{{lastName}}',
		'{{lastName}}',
		'{{lastName}}',
		'{{lastName}}{{citySuffix}}',
		'{{lastName}}{{citySuffix}}',
		'{{lastName}}{{citySuffix}}',
		'{{lastName}}-sur-{{lastName}}',
	);
	protected static $streetNameFormats = array(
		'{{streetPrefix}} {{lastName}}',
		'{{streetPrefix}} {{firstName}} {{lastName}}',
		'{{streetPrefix}} de {{lastName}}',
	);
	protected static $streetAddressFormats = array(
		'{{streetName}}',
		'{{buildingNumber}}, {{streetName}}',
		'{{buildingNumber}}, {{streetName}}',
		'{{buildingNumber}}, {{streetName}}',
		'{{buildingNumber}}, {{streetName}}',
		'{{buildingNumber}}, {{streetName}}',
	);
	protected static $addressFormats = array(
		"{{streetAddress}}\n{{postcode}} {{city}}",
	);

	protected static $buildingNumber = array('%', '%#', '%#', '%#', '%##');
	protected static $postcode = array('#####', '## ###');

	/**
	 * @example 'rue'
	 */
	public static function streetPrefix()
	{
		return static::randomElement(static::$streetPrefix);
	}
}