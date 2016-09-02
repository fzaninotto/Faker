<?php

namespace Faker\Provider\de_DE;

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
    public static function bankAccountNumber($prefix = '', $countryCode = 'DE', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }

    /**
     * Sources:
     * The 19 largest German banks by total assets
     * @see https://de.wikipedia.org/wiki/Liste_der_größten_Banken_in_Deutschland
     * The 20 largest co-operative banks by branch count
     * @see https://de.wikipedia.org/wiki/Liste_der_Genossenschaftsbanken_in_Deutschland
     * The 20 largest public savings banks by branch count
     * @see https://de.wikipedia.org/wiki/Liste_der_Sparkassen_in_Deutschland
     */
    protected static $banks = array(
        'Deutsche Bank',
        'Commerzbank',
        'KfW',
        'DZ Bank',
        'Unicredit Bank',
        'Landesbank Baden-Württemberg',
        'Bayerische Landesbank',
        'Norddeutsche Landesbank',
        'Landesbank Hessen-Thüringen',
        'Postbank',
        'ING-DiBa',
        'NRW.Bank',
        'DekaBank Deutsche Girozentrale',
        'HSH Nordbank',
        'Landwirtschaftliche Rentenbank',
        'WGZ Bank',
        'Deutsche Kreditbank',
        'L-Bank',
        'Deutsche Pfandbriefbank',
        
        'BBBank',
        'Berliner Volksbank',
        'Frankfurter Volksbank',
        'Volksbank Stuttgart',
        'Volksbank Mittelhessen',
        'Hannoversche Volksbank',
        'Dortmunder Volksbank',
        'Deutsche Apotheker- und Ärztebank',
        'Volksbank Raiffeisenbank Rosenheim-Chiemsee',
        'Volksbank Alzey-Worms',
        'Volksbank Paderborn-Höxter-Detmold',
        'Bank 1 Saar',
        'Volksbank Darmstadt - Südhessen',
        'Volksbank Lüneburger Heide',
        'Volksbank, Hildesheim-Lehrte-Pattensen',
        'VR Bank Main-Kinzig-Büdingen',
        'Volksbank Kraichgau Wiesloch-Sinsheim',
        'Volksbank Braunschweig Wolfsburg',
        'Volksbank Hohenlohe',
        'Vereinigte Volksbank',
        
        'Kreissparkasse Köln',
        'Berliner Sparkasse',
        'Hamburger Sparkasse',
        'HSGV',
        'Sparkasse KölnBonn',
        'Nassauische Sparkasse',
        'Mittelbrandenburgische Sparkasse in Potsdam',
        'Sparkasse Pforzheim Calw',
        'Sparkasse Mainfranken Würzburg',
        'Landessparkasse zu Oldenburg',
        'Erzgebirgssparkasse',
        'Kreissparkasse Ludwigsburg',
        'Stadtsparkasse München',
        'Kreissparkasse Esslingen-Nürtingen',
        'Sparkasse Hannover',
        'Sparkasse Nürnberg',
        'Kreissparkasse München Starnberg Ebersberg',
        'Ostsächsische Sparkasse Dresden',
        'Frankfurter Sparkasse',
        'Kreissparkasse Heilbronn',
        'Braunschweigische Landessparkasse',
    );

    /**
     * @example 'Volksbank Stuttgart'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }
}
