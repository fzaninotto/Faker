<?php

namespace Faker\Test\Provider;

use Faker\Calculator\Iban;
use Faker\Calculator\Luhn;
use Faker\Generator;
use Faker\Provider\Base as BaseProvider;
use Faker\Provider\DateTime as DateTimeProvider;
use Faker\Provider\Payment as PaymentProvider;
use Faker\Provider\Person as PersonProvider;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new BaseProvider($faker));
        $faker->addProvider(new DateTimeProvider($faker));
        $faker->addProvider(new PersonProvider($faker));
        $faker->addProvider(new PaymentProvider($faker));
        $this->faker = $faker;
    }

    public function localeDataProvider()
    {
        $providerPath = realpath(__DIR__ . '/../../../src/Faker/Provider');
        $localePaths = array_filter(glob($providerPath . '/*', GLOB_ONLYDIR));
        foreach ($localePaths as $path) {
            $parts = explode('/', $path);
            $locales[] = array($parts[count($parts) - 1]);
        }

        return $locales;
    }

    public function loadLocalProviders($locale)
    {
        $providerPath = realpath(__DIR__ . '/../../../src/Faker/Provider');
        if (file_exists($providerPath.'/'.$locale.'/Payment.php')) {
            $payment = "\\Faker\\Provider\\$locale\\Payment";
            $this->faker->addProvider(new $payment($this->faker));
        }
    }

    public function testCreditCardTypeReturnsValidVendorName()
    {
        $this->assertTrue(in_array($this->faker->creditCardType, array('Visa', 'MasterCard', 'American Express', 'Discover Card')));
    }

    public function creditCardNumberProvider()
    {
        return array(
            array('Discover Card', '/^6011\d{12}$/'),
            array('Visa', '/^4\d{12,15}$/'),
            array('MasterCard', '/^5[1-5]\d{14}$/')
        );
    }

    /**
     * @dataProvider creditCardNumberProvider
     */
    public function testCreditCardNumberReturnsValidCreditCardNumber($type, $regexp)
    {
        $cardNumber = $this->faker->creditCardNumber($type);
        $this->assertRegExp($regexp, $cardNumber);
        $this->assertTrue(Luhn::isValid($cardNumber));
    }

    public function testCreditCardNumberCanFormatOutput()
    {
        $this->assertRegExp('/^6011-\d{4}-\d{4}-\d{4}$/', $this->faker->creditCardNumber('Discover Card', true));
    }

    public function testCreditCardExpirationDateReturnsValidDateByDefault()
    {
        $expirationDate = $this->faker->creditCardExpirationDate;
        $this->assertTrue(intval($expirationDate->format('U')) > strtotime('now'));
        $this->assertTrue(intval($expirationDate->format('U')) < strtotime('+36 months'));
    }

    public function testRandomCard()
    {
        $cardDetails = $this->faker->creditCardDetails;
        $this->assertEquals(count($cardDetails), 4);
        $this->assertEquals(array('type', 'number', 'name', 'expirationDate'), array_keys($cardDetails));
    }

    protected $ibanFormats = array(
        'AD' => '/^AD\d{2}\d{4}\d{4}[A-Z0-9]{12}$/',
        'AE' => '/^AE\d{2}\d{3}\d{16}$/',
        'AL' => '/^AL\d{2}\d{8}[A-Z0-9]{16}$/',
        'AT' => '/^AT\d{2}\d{5}\d{11}$/',
        'AZ' => '/^AZ\d{2}[A-Z]{4}[A-Z0-9]{20}$/',
        'BA' => '/^BA\d{2}\d{3}\d{3}\d{8}\d{2}$/',
        'BE' => '/^BE\d{2}\d{3}\d{7}\d{2}$/',
        'BG' => '/^BG\d{2}[A-Z]{4}\d{4}\d{2}[A-Z0-9]{8}$/',
        'BH' => '/^BH\d{2}[A-Z]{4}[A-Z0-9]{14}$/',
        'BR' => '/^BR\d{2}\d{8}\d{5}\d{10}[A-Z]{1}[A-Z0-9]{1}$/',
        'CH' => '/^CH\d{2}\d{5}[A-Z0-9]{12}$/',
        'CR' => '/^CR\d{2}\d{3}\d{14}$/',
        'CY' => '/^CY\d{2}\d{3}\d{5}[A-Z0-9]{16}$/',
        'CZ' => '/^CZ\d{2}\d{4}\d{6}\d{10}$/',
        'DE' => '/^DE\d{2}\d{8}\d{10}$/',
        'DK' => '/^DK\d{2}\d{4}\d{9}\d{1}$/',
        'DO' => '/^DO\d{2}[A-Z0-9]{4}\d{20}$/',
        'EE' => '/^EE\d{2}\d{2}\d{2}\d{11}\d{1}$/',
        'ES' => '/^ES\d{2}\d{4}\d{4}\d{1}\d{1}\d{10}$/',
        'FI' => '/^FI\d{2}\d{6}\d{7}\d{1}$/',
        'FR' => '/^FR\d{2}\d{5}\d{5}[A-Z0-9]{11}\d{2}$/',
        'GB' => '/^GB\d{2}[A-Z]{4}\d{6}\d{8}$/',
        'GE' => '/^GE\d{2}[A-Z]{2}\d{16}$/',
        'GI' => '/^GI\d{2}[A-Z]{4}[A-Z0-9]{15}$/',
        'GR' => '/^GR\d{2}\d{3}\d{4}[A-Z0-9]{16}$/',
        'GT' => '/^GT\d{2}[A-Z0-9]{4}[A-Z0-9]{20}$/',
        'HR' => '/^HR\d{2}\d{7}\d{10}$/',
        'HU' => '/^HU\d{2}\d{3}\d{4}\d{1}\d{15}\d{1}$/',
        'IE' => '/^IE\d{2}[A-Z]{4}\d{6}\d{8}$/',
        'IL' => '/^IL\d{2}\d{3}\d{3}\d{13}$/',
        'IS' => '/^IS\d{2}\d{4}\d{2}\d{6}\d{10}$/',
        'IT' => '/^IT\d{2}[A-Z]{1}\d{5}\d{5}[A-Z0-9]{12}$/',
        'KW' => '/^KW\d{2}[A-Z]{4}\d{22}$/',
        'KZ' => '/^KZ\d{2}\d{3}[A-Z0-9]{13}$/',
        'LB' => '/^LB\d{2}\d{4}[A-Z0-9]{20}$/',
        'LI' => '/^LI\d{2}\d{5}[A-Z0-9]{12}$/',
        'LT' => '/^LT\d{2}\d{5}\d{11}$/',
        'LU' => '/^LU\d{2}\d{3}[A-Z0-9]{13}$/',
        'LV' => '/^LV\d{2}[A-Z]{4}[A-Z0-9]{13}$/',
        'MC' => '/^MC\d{2}\d{5}\d{5}[A-Z0-9]{11}\d{2}$/',
        'MD' => '/^MD\d{2}[A-Z0-9]{2}[A-Z0-9]{18}$/',
        'ME' => '/^ME\d{2}\d{3}\d{13}\d{2}$/',
        'MK' => '/^MK\d{2}\d{3}[A-Z0-9]{10}\d{2}$/',
        'MR' => '/^MR\d{2}\d{5}\d{5}\d{11}\d{2}$/',
        'MT' => '/^MT\d{2}[A-Z]{4}\d{5}[A-Z0-9]{18}$/',
        'MU' => '/^MU\d{2}[A-Z]{4}\d{2}\d{2}\d{12}\d{3}[A-Z]{3}$/',
        'NL' => '/^NL\d{2}[A-Z]{4}\d{10}$/',
        'NO' => '/^NO\d{2}\d{4}\d{6}\d{1}$/',
        'PK' => '/^PK\d{2}[A-Z]{4}[A-Z0-9]{16}$/',
        'PL' => '/^PL\d{2}\d{8}\d{16}$/',
        'PS' => '/^PS\d{2}[A-Z]{4}[A-Z0-9]{21}$/',
        'PT' => '/^PT\d{2}\d{4}\d{4}\d{11}\d{2}$/',
        'RO' => '/^RO\d{2}[A-Z]{4}[A-Z0-9]{16}$/',
        'RS' => '/^RS\d{2}\d{3}\d{13}\d{2}$/',
        'SA' => '/^SA\d{2}\d{2}[A-Z0-9]{18}$/',
        'SE' => '/^SE\d{2}\d{3}\d{16}\d{1}$/',
        'SI' => '/^SI\d{2}\d{5}\d{8}\d{2}$/',
        'SK' => '/^SK\d{2}\d{4}\d{6}\d{10}$/',
        'SM' => '/^SM\d{2}[A-Z]{1}\d{5}\d{5}[A-Z0-9]{12}$/',
        'TN' => '/^TN\d{2}\d{2}\d{3}\d{13}\d{2}$/',
        'TR' => '/^TR\d{2}\d{5}\d{1}[A-Z0-9]{16}$/',
        'VG' => '/^VG\d{2}[A-Z]{4}\d{16}$/',
    );

    /**
     * @dataProvider localeDataProvider
     */
    public function testBankAccountNumber($locale)
    {
        $parts = explode('_', $locale);
        $countryCode = array_pop($parts);

        if (!isset($this->ibanFormats[$countryCode])) {
            // No IBAN format available
            return;
        }

        $this->loadLocalProviders($locale);

        try {
            $iban = $this->faker->bankAccountNumber;
        } catch (\InvalidArgumentException $e) {
            // Not implemented, nothing to test
            $this->markTestSkipped("bankAccountNumber not implemented for $locale");
            return;
        }

        // Test format
        $this->assertRegExp($this->ibanFormats[$countryCode], $iban);

        // Test checksum
        $this->assertTrue(Iban::isValid($iban), "Checksum for $iban is invalid");
    }

    public function ibanFormatProvider()
    {
        $return = array();
        foreach ($this->ibanFormats as $countryCode => $regex) {
            $return[] = array($countryCode, $regex);
        }
        return $return;
    }
    /**
     * @dataProvider ibanFormatProvider
     */
    public function testIban($countryCode, $regex)
    {
        $iban = $this->faker->iban($countryCode);

        // Test format
        $this->assertRegExp($regex, $iban);

        // Test checksum
        $this->assertTrue(Iban::isValid($iban), "Checksum for $iban is invalid");
    }
}
