<?php

namespace Faker\Provider\it_IT;

class Payment extends \Faker\Provider\Payment
{
    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  $prefix      for generating bank account number of a specific bank
     * @param  string  $countryCode ISO 3166-1 alpha-2 country code
     * @param  integer $length      total length without country code and 2 check digits
     * @return string
     */
    public static function bankAccountNumber($prefix = '', $countryCode = 'IT', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }

    /**
     * Source:
     * @see https://en.wikipedia.org/wiki/List_of_banks_in_Italy
     */
    protected static $banks = array(
        'Banca Carige', 'Banca di Credito Cooperativo di Roma', 'Banca Mediolanum', 'Banca Monte dei Paschi di Siena', 'Banca Nazionale del Lavoro', 'Banca Popolare di Bari', 'Banca Popolare di Sondrio', 'Banca Sella Group', 'Banco BPM', 'Banco di Desio e della Brianza', 'BancoPosta', 'Bank of Italy', 'BPER Banca',
        'Cassa Depositi e Prestiti', 'Cassa di Risparmio di Asti', 'Crediop', 'Crédit Agricole Italia', 'Credito Emiliano', 'Credito Valtellinese',
        'Deutsche Bank (Italy)',
        'ICCREA Banca', 'Intesa Sanpaolo', 'Istituto per il Credito Sportivo',
        'Mediobanca',
        'UBI Banca', 'UniCredit', 'Unipol Banca',
    );
    /**
     * @example 'Unicredit SpA'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }
}
