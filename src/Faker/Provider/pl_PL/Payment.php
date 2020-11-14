<?php

namespace Faker\Provider\pl_PL;

class Payment extends \Faker\Provider\Payment
{
    /**
     * @var array list of Polish banks, source: https://ewib.nbp.pl/
     */
    protected static $banks = [
        '101' => 'Narodowy Bank Polski',
        '102' => 'Powszechna Kasa Oszczędności Bank Polski SA',
        '103' => 'Bank Handlowy w Warszawie SA',
        '105' => 'ING Bank Śląski SA',
        '106' => 'Bank BPH SA',
        '109' => 'Bank Zachodni WBK SA',
        '113' => 'Bank Gospodarstwa Krajowego',
        '114' => 'mBank SA',
        '116' => 'Bank Millennium SA',
        '122' => 'Bank Handlowo-Kredytowy Spółka Akcyjna w Katowicach w likwidacji',
        '124' => 'Bank Polska Kasa Opieki SA',
        '128' => 'HSBC Bank Polska SA',
        '132' => 'Bank Pocztowy SA',
        '147' => 'Euro Bank SA',
        '154' => 'Bank Ochrony Środowiska SA',
        '158' => 'Mercedes-Benz Bank Polska SA',
        '161' => 'SGB-Bank SA',
        '167' => 'RBS Bank (Polska) SA',
        '168' => 'PLUS BANK SA',
        '175' => 'Raiffeisen Bank Polska SA',
        '184' => 'Societe Generale SA Oddział w Polsce',
        '187' => 'Nest Bank S.A.',
        '189' => 'Pekao Bank Hipoteczny SA',
        '191' => 'Deutsche Bank Polska SA',
        '193' => 'BANK POLSKIEJ SPÓŁDZIELCZOŚCI SA',
        '194' => 'Credit Agricole Bank Polska SA',
        '195' => 'Idea Bank SA',
        '203' => 'Bank BGŻ BNP Paribas SA',
        '212' => 'Santander Consumer Bank SA',
        '213' => 'VOLKSWAGEN BANK POLSKA SA',
        '214' => 'FCA-Group Bank Polska SA',
        '215' => 'mBank Hipoteczny SA',
        '216' => 'Toyota Bank Polska SA',
        '219' => 'DNB Bank Polska SA',
        '224' => 'Banque PSA Finance SA Oddział w Polsce',
        '225' => 'Svenska Handelsbanken AB SA Oddział w Polsce',
        '229' => 'BPI Bank Polskich Inwestycji SA',
        '232' => 'Nykredit Realkredit A/S SA - Oddział w Polsce',
        '235' => 'BNP PARIBAS SA Oddział w Polsce',
        '236' => 'Danske Bank A/S SA Oddział w Polsce',
        '237' => 'Skandinaviska Enskilda Banken AB (SA) - Oddział w Polsce',
        '239' => 'CAIXABANK, S.A. (SPÓŁKA AKCYJNA)ODDZIAŁ W POLSCE',
        '241' => 'Elavon Financial Services Designated Activity Company (spółka z o.o. o wyznaczonym przedmiocie działalności) Oddział w Polsce',
        '243' => 'BNP Paribas Securities Services SKA Oddział w Polsce',
        '247' => 'HAITONG BANK, S.A. Spółka Akcyjna Oddział w Polsce',
        '248' => 'Getin Noble Bank SA',
        '249' => 'Alior Bank SA',
        '251' => 'Aareal Bank Aktiengesellschaft (Spółka Akcyjna) - Oddział w Polsce',
        '254' => 'Citibank Europe plc (Publiczna Spółka Akcyjna) Oddział w Polsce',
        '255' => 'Ikano Bank AB (publ) Spółka Akcyjna Oddział w Polsce',
        '256' => 'Nordea Bank AB SA Oddział w Polsce',
        '257' => 'UBS Limited (spółka z ograniczoną odpowiedzialnością) Oddział w Polsce',
        '258' => 'J.P. Morgan Europe Limited Sp. z o.o. Oddział w Polsce',
        '260' => 'Bank of China (Luxembourg) S.A. Spółka Akcyjna Oddział w Polsce',
        '262' => 'Industrial and Commercial Bank of China (Europe) S.A. (Spółka Akcyjna) Oddział w Polsce',
        '263' => 'Saxo Bank A/S Spółka Akcyjna Oddział w Polsce w likwidacji',
        '264' => 'RCI Banque Spółka Akcyjna Oddział w Polsce',
        '265' => 'EUROCLEAR Bank SA/NV (Spółka Akcyjna) - Oddział w Polsce',
        '266' => 'Intesa Sanpaolo S.p.A. Spółka Akcyjna Oddział w Polsce',
        '267' => 'Western Union International Bank GmbH, Sp. z o.o. Oddział w Polsce',
        '269' => 'PKO Bank Hipoteczny SA',
        '270' => 'TF BANK AB (Spółka z ograniczoną odpowiedzialnością) Oddział w Polsce',
        '271' => 'FCE Bank Spółka Akcyjna Oddział w Polsce',
        '272' => 'AS Inbank Spółka Akcyjna - Oddział w Polsce',
        '273' => 'China Construction Bank (Europe) S.A. (Spółka Akcyjna) Oddział w Polsce',
        '274' => 'MUFG Bank (Europe) N.V. S.A. Oddział w Polsce',
        '275' => 'John Deere Bank S.A. Spółka Akcyjna Oddział w Polsce',
    ];

    /**
     * @example 'Euro Bank SA'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }

    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  $prefix      for generating bank account number of a specific bank
     * @param  string  $countryCode ISO 3166-1 alpha-2 country code
     * @param  integer $length      total length without country code and 2 check digits
     * @return string
     */
    public static function bankAccountNumber($prefix = '', $countryCode = 'PL', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }

    protected static function addBankCodeChecksum($iban, $countryCode = 'PL')
    {
        if ($countryCode != 'PL' || strlen($iban) <= 8) {
            return $iban;
        }
        $checksum = 0;
        $weights = [7, 1, 3, 9, 7, 1, 3];
        for ($i = 0; $i < 7; $i++) {
            $checksum += $weights[$i] * (int) $iban[$i];
        }
        $checksum = $checksum % 10;

        return substr($iban, 0, 7) . $checksum . substr($iban, 8);
    }
}
