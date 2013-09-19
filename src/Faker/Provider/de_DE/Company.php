<?php

namespace Faker\Provider\de_DE;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('e.G.', 'e.V.', 'GbR', 'GbR', 'OHG mbH', 'GmbH & Co. OHG', 'AG & Co. OHG', 'GmbH', 'GmbH', 'GmbH', 'GmbH', 'AG', 'AG', 'AG', 'AG', 'KG', 'KG', 'KG', 'GmbH & Co. KG', 'GmbH & Co. KG', 'AG & Co. KG', 'Stiftung & Co. KG', 'KGaA', 'GmbH & Co. KGaA', 'AG & Co. KGaA', 'Stiftung & Co. KGaA');

	/**
	 * International Bank Account Number (IBAN)
	 * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
	 * @param string $prefix for generating bank account number of a specific bank
	 * @param string $countryCode ISO 3166-1 alpha-2 country code
	 * @param integer $length total length without country code and 2 check digits
	 * @return string
	 */
	public static function bankAccountNumber($prefix = '', $countryCode = 'DE', $length = null)
	{
		return static::iban($countryCode, $prefix, $length);
	}
}
