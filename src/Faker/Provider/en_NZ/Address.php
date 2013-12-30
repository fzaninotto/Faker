<?php

namespace Faker\Provider\en_NZ;

class Address extends \Faker\Provider\Address
{

	/**
	 * An array of en_NZ (New Zealand) building number formats
	 * @var array
	 */
	protected static $buildingNumber = array('#', '##', '###');

	/**
	 * An array of en_NZ (New Zealand) street suffixes
	 * @var array
	 */
	protected static $streetSuffix = array(
		'Avenue', 'Close', 'Court', 'Crescent', 'Drive', 'Esplanade', 'Grove', 'Heights', 'Highway', 'Hill', 'Lane', 'Line', 'Mall', 'Parade', 'Place', 'Quay', 'Rise', 'Road', 'Square', 'Street', 'Terrace', 'Way'
	);

	/**
	 * An array of en_NZ (New Zealand) towns
	 * @var array
	 */
	protected static $town = array(
		'Auckland', 'Bay of Plenty', 'Canterbury', 'Christchurch', 'Coromandel', 'Dunedin', 'Eastland', 'Fiordland', 'Hawkes Bay', 'Manawatu', 'Marlborough', 'Mt Cook', 'Nelson', 'Northland', 'Otago', 'Queenstown', 'Rotorua', 'Ruapehu', 'Southland', 'Taranaki', 'Taupo', 'Waikato', 'Wairarapa', 'Wanaka', 'Wanganui', 'Wellington', 'West Coast'
	);

	/**
	 * An array of en_NZ (New Zealand) regions
	 * @var array
	 */
	protected static $region = array(
		'Auckland', 'Bay of Plenty', 'Canterbury', 'Gisborne', 'Hawkes Bay', 'Manawatu-Whanganui', 'Marlborough', 'Nelson', 'Northland', 'Otago', 'Southland', 'Taranaki', 'Tasman', 'Waikato', 'Wellington', 'West Coast'
	);

	/**
	 * An array of en_NZ (New Zealand) poscode formats
	 * @var array
	 */
	protected static $postcode = array('####');

	/**
	 * An array of en_NZ (New Zealand) countries
	 * @var array
	 */
	protected static $country = array('New Zealand');

	/**
	 * An array of en_NZ (New Zealand) address formats
	 * @var array
	 */
	protected static $addressFormats = array(
		'{{buildingNumber}} {{streetName}}, {{town}}, {{region}}, {{postcode}}',
	);

	/**
	 * An array of en_NZ (New Zealand) street address formats
	 * @var array
	 */
	protected static $streetAddressFormats = array(
		'{{buildingNumber}} {{streetName}}',
	);

	/**
	 * Return a en_NZ (New Zealand) postcode
	 * @return string
	 */
	public static function postcode()
    {
        return static::numerify(static::randomElement(static::$postcode));
    }

    /**
     * Return a en_NZ (New Zealand) town
     * @return string
     */
    public static function town()
    {
    	return static::randomElement(static::$town);
    }

    /**
     * Return a en_NZ (New Zealand) city
     * @return string
     */
    public function city()
    {
    	return static::randomElement(static::$town);
    }

    /**
     * Return a en_NZ (New Zealand) region
     * @return string
     */
    public static function region()
    {
    	return static::randomElement(static::$region);
    }
}