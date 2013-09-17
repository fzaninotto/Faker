<?php

namespace Faker\Provider\pl_PL;

class Company extends \Faker\Provider\Company
{
	/**
	 * @var array list of Polish banks, source: http://www.nbp.pl/banki_w_polsce/ewidencja/ewidencja.html
	 */
	protected static $banks = array(
		'251' => 'Aareal Bank Aktiengesellschaft (Spółka Akcyjna) - Oddział w Polsce',
		'249' => 'Alior Bank SA',
		'247' => 'Banco Espirito Santo de Investimento, S.A. Spółka Akcyjna Oddział w Polsce',
		'238' => 'Banco Mais S.A. (SA) Oddział w Polsce',
		'106' => 'Bank BPH SA',
		'219' => 'Bank DnB NORD Polska SA',
		'203' => 'Bank Gospodarki Żywnościowej SA',
		'113' => 'Bank Gospodarstwa Krajowego',
		'122' => 'Bank Handlowo - Kredytowy SA (w likwidacji 31.03.92)',
		'103' => 'Bank Handlowy w Warszawie SA',
		'116' => 'Bank Millennium SA',
		'154' => 'Bank Ochrony Środowiska SA',
		'260' => 'Bank of China (Luxembourg)S.A. Spółka Akcyjna Oddział w Polsce',
		'221' => 'Bank of Tokyo-Mitsubishi UFJ (Polska) SA',
		'132' => 'Bank Pocztowy SA',
		'124' => 'Bank Polska Kasa Opieki SA',
		'193' => 'BANK POLSKIEJ SPÓŁDZIELCZOŚCI SA',
		'109' => 'Bank Zachodni WBK SA',
		'224' => 'Banque PSA Finance SA Oddział w Polsce',
		'160' => 'BNP PARIBAS BANK POLSKA SA',
		'235' => 'BNP PARIBAS SA Oddział w Polsce',
		'243' => 'BNP Paribas Securities Services SKAOddział w Polsce',
		'229' => 'BPI Bank Polskich Inwestycji SA',
		'215' => 'BRE Bank Hipoteczny SA',
		'114' => 'BRE Bank SA',
		'239' => 'CAIXABANK, S.A. (SPÓŁKA AKCYJNA)ODDZIAŁ W POLSCE',
		'254' => 'Citibank Europe plc (Publiczna Spółka Akcyjna) Oddział w Polsce',
		'194' => 'Credit Agricole Bank Polska SA',
		'252' => 'CREDIT SUISSE (LUXEMBOURG) S.A. Spółka Akcyjna, Oddział w Polsce',
		'236' => 'Danske Bank A/S SA Oddział w Polsce',
		'191' => 'Deutsche Bank PBC SA',
		'188' => 'Deutsche Bank Polska SA',
		'174' => 'DZ BANK Polska SA',
		'241' => 'Elavon Financial Services Limited (Spółka z ograniczoną odpowiedzialnością) Oddział w Polsce',
		'147' => 'Euro Bank SA',
		'265' => 'EUROCLEAR Bank SA/NV (Spółka Akcyjna) - Oddział w Polsce',
		'207' => 'FCE Bank Polska SA',
		'214' => 'Fiat Bank Polska SA',
		'253' => 'FM Bank SA',
		'248' => 'Getin Noble Bank SA',
		'128' => 'HSBC Bank Polska SA',
		'195' => 'Idea Bank SA',
		'255' => 'Ikano Bank GmbH (Sp. z o.o.) Oddział w Polsce',
		'262' => 'Industrial and Commercial Bank of China (Europe) S.A. (Spółka Akcyjna) Oddział w Polsce',
		'105' => 'ING Bank Śląski SA',
		'266' => 'Intesa Sanpaolo S.p.A. Spółka Akcyjna Oddział w Polsce',
		'168' => 'INVEST - BANK SA',
		'258' => 'J.P. Morgan Europe Limited Sp. z o.o. Oddział w Polsce',
		'158' => 'Mercedes-Benz Bank Polska SA',
		'130' => 'Meritum Bank ICB SA',
		'101' => 'Narodowy Bank Polski',
		'256' => 'Nordea Bank AB SA Oddział w Polsce',
		'144' => 'NORDEA BANK POLSKA SA',
		'232' => 'Nykredit Realkredit A/S SA - Oddział w Polsce',
		'189' => 'Pekao Bank Hipoteczny SA',
		'187' => 'Polski Bank Przedsiębiorczości SA',
		'102' => 'Powszechna Kasa Oszczędności Bank Polski SA',
		'200' => 'Rabobank Polska SA',
		'175' => 'Raiffeisen Bank Polska SA',
		'167' => 'RBS Bank (Polska) SA',
		'264' => 'RCI Banque Spółka Akcyjna Oddział w Polsce',
		'212' => 'Santander Consumer Bank SA',
		'263' => 'Saxo Bank A/S Spółka Akcyjna Oddział w Polsce',
		'161' => 'SGB-Bank SA',
		'237' => 'Skandinaviska Enskilda Banken AB (SA) - Oddział w Polsce',
		'184' => 'Societe Generale SA Oddział w Polsce',
		'225' => 'Svenska Handelsbanken AB SA Oddział w Polsce',
		'227' => 'Sygma Banque Societe Anonyme (SA) Oddział w Polsce',
		'216' => 'Toyota Bank Polska SA',
		'257' => 'UBS Limited (spółka z ograniczoną odpowiedzialnością) Oddział w Polsce',
		'261' => 'Vanquis Bank Limited (spółka z ograniczoną odpowiedzialnością) Oddział w Polsce',
		'213' => 'VOLKSWAGEN BANK POLSKA SA',
	);
	/**
	 * Register of the National Economy
	 * @link http://pl.wikipedia.org/wiki/REGON
	 * @return 9 digit number
	 */
	public static function regon()
	{
		$weights = Array(8, 9, 2, 3, 4, 5, 6, 7);
		$regionNumber = static::numberBetween(0, 49) * 2 + 1;
		$result = array((int)($regionNumber / 10), $regionNumber % 10);
		for ($i = 2; $i < count($weights); $i++) {
			$result[$i] = static::randomDigit();
		}
		$checksum = 0;
		for ($i = 0; $i < count($result); $i++) {
			$checksum += $weights[$i] * $result[$i];
		}
		$checksum %= 11;
		if ($checksum == 10) {
			$checksum = 0;
		}
		$result[] = $checksum;
		return implode('', $result);
	}

	/**
	 * Register of the National Economy, local entity number
	 * @link http://pl.wikipedia.org/wiki/REGON
	 * @return 14 digit number
	 */
	public static function regonLocal()
	{
		$weights = array(2, 4, 8, 5, 0, 9, 7, 3, 6, 1, 2, 4, 8);
		$result = str_split(static::regon());
		for ($i = count($result); $i < count($weights); $i++) {
			$result[$i] = static::randomDigit();
		}
		$checksum = 0;
		for ($i = 0; $i < count($result); $i++) {
			$checksum += $weights[$i] * $result[$i];
		}
		$checksum %= 11;
		if ($checksum == 10) {
			$checksum = 0;
		}
		$result[] = $checksum;
		return implode('', $result); 
	}

	/**
	 * @example 'Euro Bank SA'
	 */
	public static function bank()
	{
		return static::randomElement(static::$banks);
	}

	/**
	 * International Bank Account Number (IBAN) in format:
	 * PLkk bbbs sssx cccc cccc cccc cccc
	 * 28 characters, where:
	 * b = National bank code
	 * s = Branch code
	 * x = National check digit
	 * c = Account number,
	 * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
	 * @param string $prefix for generating bank account number of a specific bank
	 * @param integer $digitsNumber total length without country code and 2 check digits
	 * @param string $countryCode ISO 3166-1 alpha-2 country code
	 * @return string
	 */
	public static function bankAccountNumber($prefix = '', $digitsNumber = 24, $countryCode = 'PL')
	{
		$countryCode = strtoupper($countryCode);
		$result = $prefix;
		$digitsNumber -= strlen($prefix);
		for ($i = 0; $i < $digitsNumber; $i++) {
			$result .= static::randomDigit();
		}
		if ($countryCode == "PL" && strlen($result) > 8) {
			$checksum = 0;
			$weights = array(7, 1, 3, 9, 7, 1, 3);
			for ($i = 0; $i < 7; $i++) {
				$checksum += $weights[$i] * (int)$result[$i];
			}
			$checksum = $checksum % 10;
			$result = substr($result, 0, 7) . $checksum . substr($result, 8);
		}
		$countryNumber = 100 * (ord($countryCode[0])-55) + (ord($countryCode[1])-55);
		$tempResult = $result . $countryNumber . '00';
		// perform MOD97-10 checksum calculation
		$checksum = (int)$tempResult[0];
		for ($i = 1; $i < strlen($tempResult); $i++) {
			$checksum = (10 * $checksum + (int)$tempResult[$i]) % 97;
		}
		$checksum = 98 - $checksum;
		if ($checksum < 10)
			$checksum = '0'.$checksum;
		return $countryCode . $checksum . $result;
	}
}
