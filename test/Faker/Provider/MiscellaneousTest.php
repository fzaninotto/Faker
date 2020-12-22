<?php

namespace Faker\Test\Provider;

use Faker\Provider\Miscellaneous;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class MiscellaneousTest extends TestCase
{
    public function testBoolean()
    {
        self::assertContains(Miscellaneous::boolean(), [true, false]);
    }

    public function testMd5()
    {
        self::assertMatchesRegularExpression('/^[a-z0-9]{32}$/', Miscellaneous::md5());
    }

    public function testSha1()
    {
        self::assertMatchesRegularExpression('/^[a-z0-9]{40}$/', Miscellaneous::sha1());
    }

    public function testSha256()
    {
        self::assertMatchesRegularExpression('/^[a-z0-9]{64}$/', Miscellaneous::sha256());
    }

    public function testLocale()
    {
        self::assertMatchesRegularExpression('/^[a-z]{2,3}_[A-Z]{2}$/', Miscellaneous::locale());
    }

    public function testCountryCode()
    {
        self::assertMatchesRegularExpression('/^[A-Z]{2}$/', Miscellaneous::countryCode());
    }

    public function testCountryISOAlpha3()
    {
        self::assertMatchesRegularExpression('/^[A-Z]{3}$/', Miscellaneous::countryISOAlpha3());
    }

    public function testLanguage()
    {
        self::assertMatchesRegularExpression('/^[a-z]{2}$/', Miscellaneous::languageCode());
    }

    public function testCurrencyCode()
    {
        self::assertMatchesRegularExpression('/^[A-Z]{3}$/', Miscellaneous::currencyCode());
    }

    public function testEmoji()
    {
        self::assertMatchesRegularExpression('/^[\x{1F600}-\x{1F637}]$/u', Miscellaneous::emoji());
    }
}
