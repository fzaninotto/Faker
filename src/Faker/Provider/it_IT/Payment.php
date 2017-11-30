<?php

namespace Faker\Provider\it_IT;

class Payment extends \Faker\Provider\Payment
{
    /**
     * @see list of Italian banks (2017-11-08), source: https://en.wikipedia.org/wiki/Category:Banks_of_Italy
     */
    protected static $banks = array(
        'Banca Antonveneta', 'Banca Carige', 'Banca Intesa', 'Banca Mediolanum', 'Banca Montepaschi di Siena',
        'Banca Nazionale del Lavoro', 'Banca Sella', 'Banco BPM', 'Banco di Brescia', 'Banco di Desio e della Brianza',
        'Banco di Napoli', 'Credito Valtellinese', 'Deutsche Bank', 'FinecoBank', 'Intesa Sanpaolo', 'Mediobanca',
        'Poste italiane', 'UniCredit', 'Unipol Banca', 'WeBank'
    );
    
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }
    
    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string $prefix for generating bank account number of a specific bank
     * @param  string $countryCode ISO 3166-1 alpha-2 country code
     * @param  integer $length total length without country code and 2 check digits
     * @return string
     */
    public static function bankAccountNumber($prefix = '', $countryCode = 'IT', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }
}
