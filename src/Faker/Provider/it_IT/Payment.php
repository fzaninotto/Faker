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
     * @see http://www.comuni-italiani.it/banche/principali.html
     */
    protected static $banks = array(
        'Banca Carige Italia Spa',
        'Banca Carige SpA - Cassa di Risparmio di Genova e Imperia',
        'Banca Carime SpA',
        'Banca dell\'Adriatico SpA',
        'Banca delle Marche SpA',
        'Banca di Credito Cooperativo di Roma Società Cooperativa',
        'Banca Monte dei Paschi di Siena SpA',
        'Banca Nazionale del Lavoro Spa',
        'Banca Piccolo Credito Valtellinese, Società Cooperativa',
        'Banca Popolare Commercio e Industria SpA',
        'Banca Popolare Dell\'Emilia Romagna - Società Cooperativa',
        'Banca Popolare dell\'Etruria e del Lazio - Società Cooperativa',
        'Banca Popolare di Ancona SpA',
        'Banca Popolare di Bari SCpA',
        'Banca Popolare di Bergamo SpA',
        'Banca Popolare di Milano Scarl',
        'Banca Popolare di Puglia e Basilicata SCpA',
        'Banca Popolare di Sondrio SCpA',
        'Banca Popolare di Vicenza SCpA',
        'Banca Popolare Friuladria SpA',
        'Banca Regionale Europea SpA',
        'Banca Sella SpA',
        'Banco di Brescia San Paolo Cab SpA',
        'Banco di Desio e Della Brianza SpA',
        'Banco di Napoli SpA',
        'Banco di Sardegna SpA',
        'Banco Popolare - Società Cooperativa',
        'Cassa di Risparmio del Veneto SpA',
        'Cassa di Risparmio di Bolzano SpA - Südtiroler Sparkasse Ag',
        'Cassa di Risparmio di Firenze SpA',
        'Cassa di Risparmio di Parma e Piacenza SpA',
        'Cassa di Risparmio in Bologna SpA',
        'Credito Bergamasco SpA',
        'Credito Emiliano SpA',
        'Deutsche Bank SpA',
        'Intesa Sanpaolo Private Banking SpA',
        'Intesa Sanpaolo SpA',
        'Unicredit SpA',
        'Unipol Banca Spa',
        'Veneto Banca S.C.P.A.',
    );
    /**
     * @example 'Unicredit SpA'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }
}
