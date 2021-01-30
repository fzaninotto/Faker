<?php

namespace Faker\Provider\es_MX;

class Payment extends \Faker\Provider\Payment
{

    private static $bankCodes = array('002', '006', '009', '012', '014', '019', '021', '030', '032', '036', '037', '042', '044', '058', '059', '060', '062', '072', '102', '103', '106', '108', '110', '112', '113', '116', '124', '126', '127', '128', '129', '130', '131', '132', '133', '134', '135', '136', '137', '138', '139', '140', '141', '143', '145', '166', '168', '600', '601', '602', '605', '606', '607', '608', '610', '614', '615', '616', '617', '618', '619', '620', '621', '622', '623', '626', '627', '628', '629', '630', '631', '632', '633', '634', '636', '637', '638', '640', '642', '646', '647', '648', '649', '651', '652', '653', '655', '656', '659', '901', '902', '670', '999');

    private static $weight = array(3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7, 1, 3, 7);

    /**
     * @link https://en.wikipedia.org/wiki/CLABE
     */
    public static function clabe()
    {
        $bank = static::randomElement(static::$bankCodes);
        $accountNumber = $bank . static::numerify('##############');

        $weighted = array_map(function ($item, $weight) {
            return substr(($item * $weight) % 10, -1);
        }, str_split($accountNumber), static::$weight);

        $product = array_sum($weighted) % 10;
        $crc = (10 - $product) % 10;

        return $accountNumber . $crc;
    }
}
