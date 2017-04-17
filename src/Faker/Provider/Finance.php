<?php

namespace Faker\Provider;

use Faker\Provider\Miscellaneous;
use Faker\Calculator\Luhn;

class Finance extends Base
{
    /**
     * International Securities Identification Number (ISIN)
     *
     * @link https://en.wikipedia.org/wiki/International_Securities_Identification_Number
     * @param string $countryCode ISO 3166-1 alpha-2 country code
     * @return string ISIN number
     *
     * @example 'US0378331005'
     */
    public static function isin($countryCode = null)
    {
        $countryCode = is_null($countryCode) ? Miscellaneous::countryCode() : strtoupper($countryCode);

        $nsin = static::randomNumber(9, true);

        $checkdigit = Luhn::computeCheckDigit($countryCode . $nsin);

        return $countryCode . $nsin . $checkdigit;
    }
}
