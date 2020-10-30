<?php

namespace Faker\Provider\en_PH;

class Payment extends \Faker\Provider\Payment
{
    /**
     * @see list of Philippines banks (2019-09-30), source: https://en.wikipedia.org/wiki/List_of_largest_banks_in_the_Philippines
     */
    protected static $banks = [
        'Banco de Oro',
        'Metropolitan Bank and Trust Company',
        'Land Bank of the Philippines',
        'Bank of the Philippine Islands',
        'Philippine National Bank',
        'China Banking Corporation',
        'Security Bank Corporation',
        'Development Bank of the Philippines',
        'Rizal Commercial Banking Corporation',
        'Union Bank of the Philippines',
        'EastWest Bank',
        'United Coconut Planters Bank',
        'Citibank Philippines',
        'Asia United Bank',
        'The Hongkong and Shanghai Banking Corporation',
        'Philtrust Bank',
        'Bank of Commerce',
        'Maybank',
        'Robinsons Bank',
        'Philippine Bank of Communications',
        'Mizuho Bank',
        'MUFG Bank',
        'Standard Chartered',
        'CTBC Bank',
        'Philippine Veterans Bank',
        'Deutsche Bank',
        'JPMorgan Chase',
        'Australia and New Zealand Banking Group',
        'BDO Private Bank',
        'Sumitomo Mitsui Banking Corporation',
        'Bank of China',
        'ING Group',
        'Bank of America',
        'Mega International Commercial Bank',
        'Hana Financial Group',
        'Bangkok Bank',
        'Cathay United Bank',
        'Industrial Bank of Korea',
        'Industrial and Commercial Bank of China',
        'Shinhan Bank',
        'United Overseas Bank',
        'Chang Hwa Bank',
        'CIMB',
        'First Commercial Bank (Taiwan)',
        'Hua Nan Commercial Bank',
        'Al-Amanah Islamic Bank',
    ];

    /**
     * @see list of Philippines thrift banks (2019-06-30), source: https://en.wikipedia.org/wiki/List_of_largest_banks_in_the_Philippines
     */
    protected static $thriftBanks = [
        'BPI Family Savings Bank',
        'PSBank',
        'RCBC Savings Bank',
        'Philippine Business Bank',
        'Chinabank Savings',
        'City Savings Bank',
        'PNB Savings Bank',
        'Sterling Bank of Asia',
        'Bank of Makati',
        'UCPB Savings Bank',
        'Producers Bank',
        'First Consolidated Bank',
        'BPI Direct Savings Bank',
        'HSBC Savings Bank',
        'Wealth Development Bank',
        'Malayan Savings Bank',
        '1st Valley Bank',
        'Equicom Savings Bank',
        'CARD SME Bank',
        'Luzon Development Bank',
        'Citystate Savings Bank',
        'AllBank',
        'Bangko Kabayan',
        'Penbank',
        'Yuanta Savings Bank',
        'Legazpi Savings Bank',
        'Queen City Development Bank',
        'Enterprise Bank',
        'Sun Savings Bank',
        'Bank One',
        'Rizal MicroBank',
        'Dumaguete City Development Bank',
        'Century Savings Bank',
        'Hiyas Banking Corporation',
        'Isla Bank',
        'University Savings Bank',
        'Farmers Savings and Loan Bank',
        'NorthPoint Development Bank',
        'Pampanga Development Bank',
        'Metro Cebu Public Savings Bank',
        'Bataan Savings and Loan Bank',
        'Pacific Ace Savings Bank',
        'Cordillera Savings Bank',
        'Inter-Asia Development Bank',
        'Life Savings Bank',
        'Lemery Savings and Loan Bank',
        'Maritime Savings Bank',
        'Phil Star Development Bank',
        'Quezon Coconut Bank',
    ];

    /**
     * @example 'Land Bank of the Philippines'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }

    /**
     * @example 'BPI Family Savings Bank'
     */
    public static function thriftBank()
    {
        return static::randomElement(static::$thriftBanks);
    }
}
