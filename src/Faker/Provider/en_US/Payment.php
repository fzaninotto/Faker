<?php


namespace Faker\Provider\en_US;

class Payment extends \Faker\Provider\Payment
{
    public function bankAccountNumber()
    {
        // Length between 5 and 17, biased towards center
        $length = self::numberBetween(0, 3) + self::numberBetween(0, 3) + self::numberBetween(0, 3) + self::numberBetween(0, 3) + 5;

        return self::numerify(str_repeat('#', $length));
    }

    public function bankRoutingNumber()
    {
        $district = self::numberBetween(1, 12);
        $type = self::randomElement(array(0, 0, 0, 0, 20, 20, 60));
        $clearingCenter = self::randomDigitNotNull();
        $state = self::randomDigit();
        $institution = self::randomNumber(4, true);

        $result = sprintf('%02d%01d%01d%04d', $district + $type, $clearingCenter, $state, $institution);

        return $result . self::calculateRoutingNumberChecksum($result);
    }

    public static function calculateRoutingNumberChecksum($routing)
    {
        return (
            7 * ($routing[0] + $routing[3] + $routing[6]) +
            3 * ($routing[1] + $routing[4] + $routing[7]) +
            9 * ($routing[2] + $routing[5])
        ) % 10;
    }

    /**
     * Source:
     * @see https://en.wikipedia.org/wiki/List_of_largest_banks_in_the_United_States
     */
    protected static $banks = array(
        'Ally Financial',
        'American Express',
        'Apple Bank for Savings',
        'Arvest Bank',
        'Associated Banc-Corp',
        'Banco de Crédito e Inversiones',
        'Bank of America',
        'Bank of Hawaii',
        'Bank of Hope',
        'Bank OZK',
        'BankUnited',
        'Barclays',
        'BB&T',
        'BBVA Compass',
        'BMO Harris Bank',
        'BNP Paribas',
        'BOK Financial Corporation',
        'Capital One',
        'Cathay Bank',
        'Charles Schwab Corporation',
        'Chemical Financial Corporation',
        'CIBC Bank USA',
        'CIT Group',
        'Citigroup',
        'Citizens Financial Group',
        'Comerica',
        'Commerce Bancshares',
        'Credit Suisse',
        'Deutsche Bank',
        'Discover Financial',
        'E-Trade',
        'East West Bank',
        'Fifth Third Bank',
        'First Citizens BancShares',
        'First Hawaiian Bank',
        'First Horizon National Corporation',
        'First Midwest Bank',
        'First National of Nebraska',
        'FirstBank Holding Co',
        'Flagstar Bank',
        'FNB Corporation',
        'Frost Bank',
        'Fulton Financial Corporation',
        'Goldman Sachs',
        'Hancock Whitney',
        'Home BancShares',
        'HSBC Bank USA',
        'Huntington Bancshares',
        'IberiaBank',
        'Investors Bank',
        'John Deere',
        'JP Morgan Chase',
        'KeyCorp',
        'M&T Bank',
        'Macy\'s',
        'MidFirst Bank',
        'Mizuho Financial Group',
        'Modern Woodmen of America',
        'Morgan Stanley',
        'MUFG Union Bank',
        'Mutual of Omaha',
        'New York Community Bank',
        'Northern Trust',
        'Old National Bank',
        'PacWest Bancorp',
        'People\'s United Financial',
        'Pinnacle Financial Partners',
        'PNC Financial Services',
        'Popular, Inc.',
        'Prosperity Bancshares',
        'Rabobank',
        'Raymond James Financial',
        'RBC Bank',
        'Regions Financial Corporation',
        'Santander Bank',
        'Silicon Valley Bank',
        'Simmons Bank',
        'South State Bank',
        'State Farm',
        'State Street Corporation',
        'Sterling Bancorp',
        'Stifel',
        'SunTrust Banks',
        'Synchrony Financial',
        'Synovus',
        'TCF Financial Corporation',
        'TD Bank, N.A.',
        'Texas Capital Bank',
        'The Bank of New York Mellon',
        'TIAA',
        'U.S. Bancorp',
        'UBS',
        'UMB Financial Corporation',
        'Umpqua Holdings Corporation',
        'United Bank (West Virginia)',
        'USAA',
        'Valley National Bank',
        'Washington Federal',
        'Webster Bank',
        'Wells Fargo',
        'Western Alliance Bancorporation',
        'Wintrust Financial',
        'Zions Bancorporation',
    );

    /**
     * @example 'Sovereign Bank'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }
}
