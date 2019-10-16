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
        'UniCredit',
        'Intesa Sanpaolo',
        'Bank of Italy',
        'Cassa Depositi e Prestiti',
        'BancoPosta',
        'Istituto per il Credito Sportivo',
        'Banco BPM',
        'Banca Monte dei Paschi di Siena',
        'UBI Banca',
        'Banca Nazionale del Lavoro',
        'BPER Banca',
        'Mediobanca',
        'Crédit Agricole Italia',
        'Banca Mediolanum',
        'Banca Popolare di Sondrio',
        'Credito Emiliano',
        'ICCREA Banca',
        'Credito Valtellinese',
        'Banca Carige',
        'Deutsche Bank (Italy)',
        'Crediop',
        'Banca Popolare di Bari',
        'Banco di Desio e della Brianza',
        'Unipol Banca',
        'Banca Sella Group',
        'Banca di Credito Cooperativo di Roma',
        'Cassa di Risparmio di Asti',
    );
    /**
     * @example 'Unicredit SpA'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }
}
