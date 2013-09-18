<?php

namespace Faker\Provider;

class Company extends \Faker\Provider\Base
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
    );

    protected static $companySuffix = array('Ltd');

    /**
     * @example 'Acme Ltd'
     */
    public function company()
    {
        $format = static::randomElement(static::$formats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Ltd'
     */
    public static function companySuffix()
    {
        return static::randomElement(static::$companySuffix);
    }

	/**
	 * International Bank Account Number (IBAN)
	 * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
	 * @param string $prefix for generating bank account number of a specific bank
	 * @param integer $digitsNumber total length without country code and 2 check digits
	 * @param string $countryCode ISO 3166-1 alpha-2 country code
	 * @return string
	 */
	public static function bankAccountNumber($prefix = '', $digitsNumber = 24, $countryCode = 'PL')
	{
		$countryCode = strtoupper($countryCode);
		$result = $prefix;
		$digitsNumber -= strlen($prefix);
		for ($i = 0; $i < $digitsNumber; $i++) {
			$result .= static::randomDigit();
		}
		$countryNumber = 100 * (ord($countryCode[0])-55) + (ord($countryCode[1])-55);
		$tempResult = $result . $countryNumber . '00';
		// perform MOD97-10 checksum calculation
		$checksum = (int)$tempResult[0];
		for ($i = 1; $i < strlen($tempResult); $i++) {
			$checksum = (10 * $checksum + (int)$tempResult[$i]) % 97;
		}
		$checksum = 98 - $checksum;
		if ($checksum < 10)
			$checksum = '0'.$checksum;
		return $countryCode . $checksum . $result;
	}
}
