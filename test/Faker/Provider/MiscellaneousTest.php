<?php

namespace Faker\Test\Provider;

use Faker\Provider\Miscellaneous;
use PHPUnit\Framework\TestCase;

final class MiscellaneousTest extends TestCase
{
    public function testBoolean()
    {
        $this->assertContains(Miscellaneous::boolean(), array(true, false));
    }

    public function testMd5()
    {
        $this->assertRegExp('/^[a-z0-9]{32}$/', Miscellaneous::md5());
    }

    public function testSha1()
    {
        $this->assertRegExp('/^[a-z0-9]{40}$/', Miscellaneous::sha1());
    }

    public function testSha256()
    {
        $this->assertRegExp('/^[a-z0-9]{64}$/', Miscellaneous::sha256());
    }

    public function testLocale()
    {
        $this->assertRegExp('/^[a-z]{2,3}_[A-Z]{2}$/', Miscellaneous::locale());
    }

    public function testCountryCode()
    {
        $this->assertRegExp('/^[A-Z]{2}$/', Miscellaneous::countryCode());
    }

    public function testCountryISOAlpha3()
    {
        $this->assertRegExp('/^[A-Z]{3}$/', Miscellaneous::countryISOAlpha3());
    }

    public function testLanguage()
    {
        $this->assertRegExp('/^[a-z]{2}$/', Miscellaneous::languageCode());
    }

    public function testCurrencyCode()
    {
        $this->assertRegExp('/^[A-Z]{3}$/', Miscellaneous::currencyCode());
    }

    public function testEmoji()
    {
        $this->assertRegExp('/^[\x{1F600}-\x{1F637}]$/u', Miscellaneous::emoji());
    }
}
