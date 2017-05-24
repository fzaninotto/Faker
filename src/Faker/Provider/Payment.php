<?php

namespace Faker\Provider;

use Faker\Calculator\Iban;
use Faker\Calculator\Luhn;

class Payment extends Base
{
    public static $expirationDateFormat = "m/y";

    protected static $cardVendors = array(
        'Visa', 'Visa', 'Visa', 'Visa', 'Visa',
        'MasterCard', 'MasterCard', 'MasterCard', 'MasterCard', 'MasterCard',
        'American Express', 'Discover Card'
    );

    /**
     * @var array List of card brand masks for generating valid credit card numbers
     * @see https://en.wikipedia.org/wiki/Payment_card_number Reference for existing prefixes
     * @see https://www.mastercard.us/en-us/issuers/get-support/2-series-bin-expansion.html MasterCard 2017 2-Series BIN Expansion
     */
    protected static $cardParams = array(
        'Visa' => array(
            "4539########",
            "4539###########",
            "4556########",
            "4556###########",
            "4916########",
            "4916###########",
            "4532########",
            "4532###########",
            "4929########",
            "4929###########",
            "40240071####",
            "40240071#######",
            "4485########",
            "4485###########",
            "4716########",
            "4716###########",
            "4###########",
            "4##############"
        ),
        'MasterCard' => array(
            "2221###########",
            "23#############",
            "24#############",
            "25#############",
            "26#############",
            "2720###########",
            "51#############",
            "52#############",
            "53#############",
            "54#############",
            "55#############"
        ),
        'American Express' => array(
            "34############",
            "37############"
        ),
        'Discover Card' => array(
            "6011###########"
        ),
    );

    /**
     * @var array list of IBAN formats, source: @link https://www.swift.com/standards/data-standards/iban
     */
    protected static $ibanFormats = array(
        'AD' => array(array('n', 4),    array('n', 4),  array('c', 12)),
        'AE' => array(array('n', 3),    array('n', 16)),
        'AL' => array(array('n', 8),    array('c', 16)),
        'AT' => array(array('n', 5),    array('n', 11)),
        'AZ' => array(array('a', 4),    array('c', 20)),
        'BA' => array(array('n', 3),    array('n', 3),  array('n', 8),  array('n', 2)),
        'BE' => array(array('n', 3),    array('n', 7),  array('n', 2)),
        'BG' => array(array('a', 4),    array('n', 4),  array('n', 2),  array('c', 8)),
        'BH' => array(array('a', 4),    array('c', 14)),
        'BR' => array(array('n', 8),    array('n', 5),  array('n', 10), array('a', 1),  array('c', 1)),
        'CH' => array(array('n', 5),    array('c', 12)),
        'CR' => array(array('n', 3),    array('n', 14)),
        'CY' => array(array('n', 3),    array('n', 5),  array('c', 16)),
        'CZ' => array(array('n', 4),    array('n', 6),  array('n', 10)),
        'DE' => array(array('n', 8),    array('n', 10)),
        'DK' => array(array('n', 4),    array('n', 9),  array('n', 1)),
        'DO' => array(array('c', 4),    array('n', 20)),
        'EE' => array(array('n', 2),    array('n', 2),  array('n', 11), array('n', 1)),
        'ES' => array(array('n', 4),    array('n', 4),  array('n', 1),  array('n', 1),  array('n', 10)),
        'FI' => array(array('n', 6),    array('n', 7),  array('n', 1)),
        'FR' => array(array('n', 5),    array('n', 5),  array('c', 11), array('n', 2)),
        'GB' => array(array('a', 4),    array('n', 6),  array('n', 8)),
        'GE' => array(array('a', 2),    array('n', 16)),
        'GI' => array(array('a', 4),    array('c', 15)),
        'GR' => array(array('n', 3),    array('n', 4),  array('c', 16)),
        'GT' => array(array('c', 4),    array('c', 20)),
        'HR' => array(array('n', 7),    array('n', 10)),
        'HU' => array(array('n', 3),    array('n', 4),  array('n', 1),  array('n', 15), array('n', 1)),
        'IE' => array(array('a', 4),    array('n', 6),  array('n', 8)),
        'IL' => array(array('n', 3),    array('n', 3),  array('n', 13)),
        'IS' => array(array('n', 4),    array('n', 2),  array('n', 6),  array('n', 10)),
        'IT' => array(array('a', 1),    array('n', 5),  array('n', 5),  array('c', 12)),
        'KW' => array(array('a', 4),    array('n', 22)),
        'KZ' => array(array('n', 3),    array('c', 13)),
        'LB' => array(array('n', 4),    array('c', 20)),
        'LI' => array(array('n', 5),    array('c', 12)),
        'LT' => array(array('n', 5),    array('n', 11)),
        'LU' => array(array('n', 3),    array('c', 13)),
        'LV' => array(array('a', 4),    array('c', 13)),
        'MC' => array(array('n', 5),    array('n', 5),  array('c', 11), array('n', 2)),
        'MD' => array(array('c', 2),    array('c', 18)),
        'ME' => array(array('n', 3),    array('n', 13), array('n', 2)),
        'MK' => array(array('n', 3),    array('c', 10), array('n', 2)),
        'MR' => array(array('n', 5),    array('n', 5),  array('n', 11), array('n', 2)),
        'MT' => array(array('a', 4),    array('n', 5),  array('c', 18)),
        'MU' => array(array('a', 4),    array('n', 2),  array('n', 2),  array('n', 12), array('n', 3),  array('a', 3)),
        'NL' => array(array('a', 4),    array('n', 10)),
        'NO' => array(array('n', 4),    array('n', 6),  array('n', 1)),
        'PK' => array(array('a', 4),    array('c', 16)),
        'PL' => array(array('n', 8),    array('n', 16)),
        'PS' => array(array('a', 4),    array('c', 21)),
        'PT' => array(array('n', 4),    array('n', 4),  array('n', 11), array('n', 2)),
        'RO' => array(array('a', 4),    array('c', 16)),
        'RS' => array(array('n', 3),    array('n', 13), array('n', 2)),
        'SA' => array(array('n', 2),    array('c', 18)),
        'SE' => array(array('n', 3),    array('n', 16), array('n', 1)),
        'SI' => array(array('n', 5),    array('n', 8),  array('n', 2)),
        'SK' => array(array('n', 4),    array('n', 6),  array('n', 10)),
        'SM' => array(array('a', 1),    array('n', 5),  array('n', 5),  array('c', 12)),
        'TN' => array(array('n', 2),    array('n', 3),  array('n', 13), array('n', 2)),
        'TR' => array(array('n', 5),    array('n', 1),  array('c', 16)),
        'VG' => array(array('a', 4),    array('n', 16)),
    );

    /**
     * @see list of top 150 largest banks (USA) http://onlinebankingreport.com/resources/100.html
     * @var array
     */
    protected static $banks = array(
        'JP Morgan Chase & Co.',
        'Bank of America',
        'Wells Fargo',
        'Citigroup',
        'PNC Financial Services Group',
        'HSBC Holdings',
        'Bank of New York Mellon',
        'U.S. Bancorp',
        'SunTrust Bank',
        'State Street Corp.',
        'Capital One Financial',
        'BB&T Corporation',
        'Toronto-Dominion Bank',
        'Royal Bank of Scotland',
        'Regions Financial',
        'Fifth Third Bancorp',
        'ING Group',
        'KeyCorp',
        'Northern Trust',
        'Bank of Montreal',
        'BNP Paribas (Bank of the West)',
        'Mitsubishi UFJ Financial Group (Union Bank)',
        'Allied Irish Banks',
        'Comerica',
        'Zions Bancorp',
        'Marshall & Ilsley',
        'Banco Bilbao Vizcaya Argentaria S.A.',
        'Huntington Bancshares',
        'E-Trade Financial',
        'Synovus Financial Corp.',
        'Popular Inc.',
        'Navy Federal Credit Union',
        'Charles Schwab Corp.',
        'Royal Bank of Canada (Centura)',
        'Colonial BancGroup Inc.',
        'Hudson City Bancorp',
        'Deutsche Bank',
        'People’s United Financial Inc.',
        'State Employees Credit Union',
        'Associated Banc-Corp',
        'BOK Financial Corp.',
        'New York Community Bancorp Inc.',
        'First Horizon National Bancorp',
        'First Citizens Bancshares',
        'Astoria Financial Corp.',
        'First Bancorp',
        'Commerce Bancshares',
        'City National Bank',
        'Webster Financial Corp',
        'FBOP Corp',
        'Cullen/Frost Bankers Inc.',
        'Guaranty Financial Group Inc.',
        'AmTrust Financial Corp.',
        'New York Private Bank & Trust Corp',
        'W Holding Co. Inc.',
        'Fulton Financial Corp.',
        'Pentagon Federal Credit Union',
        'TCF Financial',
        'Lehman Brothers Holdings Inc.',
        'Bancorpsouth, Inc.',
        'Valley National Bank',
        'South Financial Group',
        'Whitney Holding Corp.',
        'Susquehanna Bancshares Inc.',
        'Citizens Republic Bancorp Inc.',
        'UCBH Holdings, Inc.',
        'Raymond James Financial Inc.',
        'First Banks Inc.',
        'Wilmington Trust',
        'BankUnited Financial Corp.',
        'Third Federal S&L',
        'Wintrust Financial Corp',
        'Sterling Financial Corp.',
        'Bank of Hawaii',
        'Arvest Bank Group',
        'East West Bancorp Inc.',
        'FirstBank Holding Co.',
        'PrivateBancorp',
        'Flagstar Bancorp Inc.',
        'Boeing Employees Credit Union',
        'UMB Financial Corp.',
        'Midland Financial',
        'Firstmerit Corp.',
        'Corus Bancshares, Inc.',
        'SVB Financial Group',
        'Prosperity Bancshares Inc.',
        'Washington Federal, Inc.',
        'United Community Banks, Inc.',
        'MetLife Inc.',
        'International Bankshares Corp',
        'Cathay General Bancorp',
        'Trustmark Corp.',
        'Central Bancompany',
        'Umpqua Holdings Corp.',
        'Pacific Capital Bancorp',
        'SchoolsFirst Federal Credit Union',
        'MB Financial, Inc.',
        'National Penn Bancshares Inc.',
        'Cam-Discount Ltd.',
        'Apple Financial Holdings Inc.',
        'F.N.B. Corp',
        'First Niagara Financial',
        'Golden 1 Credit Union',
        'Hancock Holding Company',
        'First Citizens Bancorp, Inc.',
        'United Bancshares, Inc.',
        'First Midwest Bancorp, Inc.',
        'Old National Bancorp',
        'Otto Bremer Foundation',
        'First Interstate Bank',
        'Northwest Bancorp MHC',
        'Eastern Bank Corp.',
        'Suncoast Schools Federal Credit Union',
        'Banco Santander',
        'EverBank Financial Corp.',
        'Dickinson Financial Corp.',
        'Boston Private Financial Holdings, Inc.',
        'FirstFed Financial Corp.',
        'Bank Leumi Ie-Israel, BM',
        'American Airlines Federal Credit Union',
        'Rabobank Nederland',
        'Park National Corp.',
        'Provident Bancshares',
        'Alliant Credit Union',
        'Capitol Bancorp Ltd.',
        'NewAlliance Bancshares Inc',
        'Johnson Financial Group',
        'R&G Financial Corp.',
        'Doral Financial Corp',
        'Mercantil Servicios Financieros',
        'First Commonwealth Financial Corporation',
        'Pinnacle Bancorp Inc.',
        'Investors Bancorp MHC',
        'Provident Financial Services Inc.',
        'Ocean Bankshares, Inc.',
        'Security Service Federal Credit Union',
        'Capitol Federal Savings Bank MHC',
        'Iberiabank Corp.',
        'SNBNY Holdings',
        'San Diego County Credit Union',
        'America First Federal Credit Union',
        'Harleysville National Corp.',
        'BFC Financial Corp',
        'Amcore Financial Inc.',
        'NBT Bancorp Inc.',
        'Central Pacific Financial Corp.',
        'Sterling Bancshares',
        'Banner Corp.',
        'First Merchants Corp',
        'Community Bank System',
    );

    /**
     * @return string Returns a credit card vendor name
     *
     * @example 'MasterCard'
     */
    public static function creditCardType()
    {
        return static::randomElement(static::$cardVendors);
    }

    /**
     * Returns the String of a credit card number.
     *
     * @param string  $type      Supporting any of 'Visa', 'MasterCard', 'American Express', and 'Discover'
     * @param boolean $formatted Set to true if the output string should contain one separator every 4 digits
     * @param string  $separator Separator string for formatting card number. Defaults to dash (-).
     * @return string
     *
     * @example '4485480221084675'
     */
    public static function creditCardNumber($type = null, $formatted = false, $separator = '-')
    {
        if (is_null($type)) {
            $type = static::creditCardType();
        }
        $mask = static::randomElement(static::$cardParams[$type]);

        $number = static::numerify($mask);
        $number .= Luhn::computeCheckDigit($number);

        if ($formatted) {
            $p1 = substr($number, 0, 4);
            $p2 = substr($number, 4, 4);
            $p3 = substr($number, 8, 4);
            $p4 = substr($number, 12);
            $number = $p1 . $separator . $p2 . $separator . $p3 . $separator . $p4;
        }

        return $number;
    }

    /**
     * @param boolean $valid True (by default) to get a valid expiration date, false to get a maybe valid date
     * @return \DateTime
     * @example 04/13
     */
    public function creditCardExpirationDate($valid = true)
    {
        if ($valid) {
            return $this->generator->dateTimeBetween('now', '36 months');
        }

        return $this->generator->dateTimeBetween('-36 months', '36 months');
    }

    /**
     * @param boolean $valid                True (by default) to get a valid expiration date, false to get a maybe valid date
     * @param string  $expirationDateFormat
     * @return string
     * @example '04/13'
     */
    public function creditCardExpirationDateString($valid = true, $expirationDateFormat = null)
    {
        return $this->creditCardExpirationDate($valid)->format(is_null($expirationDateFormat) ? static::$expirationDateFormat : $expirationDateFormat);
    }

    /**
     * @param  boolean $valid True (by default) to get a valid expiration date, false to get a maybe valid date
     * @return array
     */
    public function creditCardDetails($valid = true)
    {
        $type = static::creditCardType();

        return array(
            'type'   => $type,
            'number' => static::creditCardNumber($type),
            'name'   => $this->generator->name(),
            'expirationDate' => $this->creditCardExpirationDateString($valid)
        );
    }

    /**
     * International Bank Account Number (IBAN)
     *
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  $countryCode ISO 3166-1 alpha-2 country code
     * @param  string  $prefix      for generating bank account number of a specific bank
     * @param  integer $length      total length without country code and 2 check digits
     * @return string
     */
    public static function iban($countryCode, $prefix = '', $length = null)
    {
        $countryCode = is_null($countryCode) ? self::randomKey(self::$ibanFormats) : strtoupper($countryCode);

        $format = !isset(static::$ibanFormats[$countryCode]) ? null : static::$ibanFormats[$countryCode];
        if ($length === null) {
            if ($format === null) {
                $length = 24;
            } else {
                $length = 0;
                foreach ($format as $part) {
                    list($class, $groupCount) = $part;
                    $length += $groupCount;
                }
            }
        }
        if ($format === null) {
            $format = array(array('n', $length));
        }

        $expandedFormat = '';
        foreach ($format as $item) {
            list($class, $length) = $item;
            $expandedFormat .=  str_repeat($class, $length);
        }

        $result = $prefix;
        $expandedFormat = substr($expandedFormat, strlen($result));
        foreach (str_split($expandedFormat) as $class) {
            switch ($class) {
                default:
                case 'c':
                    $result .= mt_rand(0, 100) <= 50 ? static::randomDigit() : strtoupper(static::randomLetter());
                    break;
                case 'a':
                    $result .= strtoupper(static::randomLetter());
                    break;
                case 'n':
                    $result .= static::randomDigit();
                    break;
            }
        }

        $checksum = Iban::checksum($countryCode . '00' . $result);

        return $countryCode . $checksum . $result;
    }

    /**
     * Return the String of a SWIFT/BIC number
     *
     * @example 'RZTIAT22263'
     * @link    http://en.wikipedia.org/wiki/ISO_9362
     * @return  string Swift/Bic number
     */
    public static function swiftBicNumber()
    {
        return self::regexify("^([A-Z]){4}([A-Z]){2}([0-9A-Z]){2}([0-9A-Z]{3})?$");
    }
    
    /**
     * @example 'JP Morgan Chase & Co.'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }
}
