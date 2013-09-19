<?php

namespace Faker\Provider\is_IS;

/**
 * @author Birkir Gudjonsson <birkir.gudjonsson@gmail.com>
 */
class Company extends \Faker\Provider\Company
{
    /**
     * @var array Danish company name formats.
     */
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{firstname}} {{lastName}} {{companySuffix}}',
        '{{middleName}} {{companySuffix}}',
        '{{middleName}} {{companySuffix}}',
        '{{middleName}} {{companySuffix}}',
        '{{firstname}} {{middleName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}} {{companySuffix}}',
        '{{lastName}} og {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}} {{companySuffix}}',
        '{{lastName}} og {{lastName}} {{companySuffix}}',
        '{{middleName}} & {{middleName}} {{companySuffix}}',
        '{{middleName}} og {{middleName}} {{companySuffix}}',
        '{{middleName}} & {{lastName}}',
        '{{middleName}} og {{lastName}}',
    );

    /**
     * @var array Company suffixes.
     */
    protected static $companySuffix = array('ehf.', 'hf.', 'sf.');

    /**
     * @link http://www.rsk.is/atvinnurekstur/virdisaukaskattur/
     *
     * @var string VSK number format.
     */
    protected static $vskFormat = '%####';

    /**
     * Generates a VSK number (5 digits).
     *
     * @return string
     */
    public static function vsk()
    {
        return static::numerify(static::$vskFormat);
    }

	/**
	 * International Bank Account Number (IBAN)
	 * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
	 * @param string $prefix for generating bank account number of a specific bank
	 * @param string $countryCode ISO 3166-1 alpha-2 country code
	 * @param integer $length total length without country code and 2 check digits
	 * @return string
	 */
	public static function bankAccountNumber($prefix = '', $countryCode = 'IS', $length = null)
	{
		return static::iban($countryCode, $prefix, $length);
	}
}
