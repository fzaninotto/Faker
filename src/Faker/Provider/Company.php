<?php

namespace Faker\Provider;

class Company extends \Faker\Provider\Base
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
    );

    protected static $companySuffix = array('Ltd');

	/**
	 * @var array list of IBAN formats, source: @link http://www.swift.com/dsp/resources/documents/IBAN_Registry.txt
	 */
	protected static $ibanFormats = array(
		'AD' => array(array('n', 4),	array('n', 4),	array('c', 12)),
		'AE' => array(array('n', 3),	array('n', 16)),
		'AL' => array(array('n', 8),	array('c', 16)),
		'AT' => array(array('n', 5),	array('n', 11)),
		'AZ' => array(array('a', 4),	array('c', 20)),
		'BA' => array(array('n', 3),	array('n', 3),	array('n', 8),	array('n', 2)),
		'BE' => array(array('n', 3),	array('n', 7),	array('n', 2)),
		'BG' => array(array('a', 4),	array('n', 4),	array('n', 2),	array('c', 8)),
		'BH' => array(array('a', 4),	array('c', 14)),
		'BR' => array(array('n', 8),	array('n', 5),	array('n', 10),	array('a', 1),	array('c', 1)),
		'CH' => array(array('n', 5),	array('c', 12)),
		'CR' => array(array('n', 3),	array('n', 14)),
		'CY' => array(array('n', 3),	array('n', 5),	array('c', 16)),
		'CZ' => array(array('n', 4),	array('n', 6),	array('n', 10)),
		'DE' => array(array('n', 8),	array('n', 10)),
		'DK' => array(array('n', 4),	array('n', 9),	array('n', 1)),
		'DO' => array(array('c', 4),	array('n', 20)),
		'EE' => array(array('n', 2),	array('n', 2),	array('n', 11),	array('n', 1)),
		'ES' => array(array('n', 4),	array('n', 4),	array('n', 1),	array('n', 1),	array('n', 10)),
		'FR' => array(array('n', 5),	array('n', 5),	array('c', 11),	array('n', 2)),
		'GB' => array(array('a', 4),	array('n', 6),	array('n', 8)),
		'GE' => array(array('a', 2),	array('n', 16)),
		'GI' => array(array('a', 4),	array('c', 15)),
		'GR' => array(array('n', 3),	array('n', 4),	array('c', 16)),
		'GT' => array(array('c', 4),	array('c', 20)),
		'HR' => array(array('n', 7),	array('n', 10)),
		'HU' => array(array('n', 3),	array('n', 4),	array('n', 1),	array('n', 15),	array('n', 1)),
		'IE' => array(array('a', 4),	array('n', 6),	array('n', 8)),
		'IL' => array(array('n', 3),	array('n', 3),	array('n', 13)),
		'IS' => array(array('n', 4),	array('n', 2),	array('n', 6),	array('n', 10)),
		'IT' => array(array('a', 1),	array('n', 5),	array('n', 5),	array('c', 12)),
		'KW' => array(array('a', 4),	array('c', 22)),
		'KZ' => array(array('n', 3),	array('c', 13)),
		'LB' => array(array('n', 4),	array('c', 20)),
		'LI' => array(array('n', 5),	array('c', 12)),
		'LT' => array(array('n', 5),	array('n', 11)),
		'LU' => array(array('n', 3),	array('c', 13)),
		'LV' => array(array('a', 4),	array('c', 13)),
		'MC' => array(array('n', 5),	array('n', 5),	array('c', 11),	array('n', 2)),
		'MD' => array(array('c', 2),	array('c', 18)),
		'ME' => array(array('n', 3),	array('n', 13),	array('n', 2)),
		'MK' => array(array('n', 3),	array('c', 10),	array('n', 2)),
		'MR' => array(array('n', 5),	array('n', 5),	array('n', 11),	array('n', 2)),
		'MT' => array(array('a', 4),	array('n', 5),	array('c', 18)),
		'MU' => array(array('a', 4),	array('n', 2),	array('n', 2),	array('n', 12),	array('n', 3),	array('a', 3)),
		'NL' => array(array('a', 4),	array('n', 10)),
		'NO' => array(array('n', 4),	array('n', 6),	array('n', 1)),
		'PK' => array(array('a', 4),	array('c', 16)),
		'PL' => array(array('n', 8),	array('n', 16)),
		'PS' => array(array('a', 4),	array('c', 21)),
		'PT' => array(array('n', 4),	array('n', 4),	array('n', 11),	array('n', 2)),
		'RO' => array(array('a', 4),	array('c', 16)),
		'RS' => array(array('n', 3),	array('n', 13),	array('n', 2)),
		'SA' => array(array('n', 2),	array('c', 18)),
		'SE' => array(array('n', 3),	array('n', 16),	array('n', 1)),
		'SI' => array(array('n', 5),	array('n', 8),	array('n', 2)),
		'SK' => array(array('n', 4),	array('n', 6),	array('n', 10)),
		'SM' => array(array('a', 1),	array('n', 5),	array('n', 5),	array('c', 12)),
		'TN' => array(array('n', 2),	array('n', 3),	array('n', 13),	array('n', 2)),
		'TR' => array(array('n', 5),	array('c', 1),	array('c', 16)),
		'VG' => array(array('a', 4),	array('n', 16)),
	);

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
	 * @param string $countryCode ISO 3166-1 alpha-2 country code
	 * @param string $prefix for generating bank account number of a specific bank
	 * @param integer $length total length without country code and 2 check digits
	 * @return string
	 */
	protected static function iban($countryCode, $prefix = '', $length = null)
	{
		$countryCode = strtoupper($countryCode);
		$format = !isset(static::$ibanFormats[$countryCode]) ? array() : static::$ibanFormats[$countryCode];
		if ($length === null) {
			if ($format === null) {
				$length = 24;
			} else {
				$length = 0;
				foreach($format as $part) {
					list($class, $groupCount) = $part;
					$length += $groupCount;
				}
			}
		}

		$result = $prefix;
		$length -= strlen($prefix);
		$nextPart = array_shift($format);
		if ($nextPart !== false) {
			list($class, $groupCount) = $nextPart;
		} else {
			$class = 'n';
			$groupCount = 0;
		}
		$groupCount = $nextPart === false ? 0 : $nextPart[1];
		for ($i = 0; $i < $length; $i++) {
			if ($nextPart !== false && $groupCount-- < 1) {
				$nextPart = array_shift($format);
				list($class, $groupCount) = $nextPart;
			}
			switch($class) {
				default:
				case 'c': $result .= mt_rand(0, 100) <= 50 ? static::randomDigit() : strtoupper(static::randomLetter()); break;
				case 'a': $result .= strtoupper(static::randomLetter()); break;
				case 'n': $result .= static::randomDigit(); break;
			}
		}

		$result = static::addBankCodeChecksum($result, $countryCode);

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

	/**
	 * Calculates a checksum for the national bank and branch code part in the IBAN.
	 * @param string $iban randomly generated $iban
	 * @param string $countryCode ISO 3166-1 alpha-2 country code
	 * @return string IBAN with one character altered to a proper checksum
	 */
	protected static function addBankCodeChecksum($iban, $countryCode = '')
	{
		return $iban;
	}
}
