<?php

namespace Faker\Test\Provider;

use Faker\Provider\Miscellaneous;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class MiscellaneousTest extends TestCase
{
    public function testBoolean(): void
    {
        self::assertContains(Miscellaneous::boolean(), [true, false]);
    }

    public function testMd5(): void
    {
        self::assertMatchesRegularExpression('/^[a-z0-9]{32}$/', Miscellaneous::md5());
    }

    public function testSha1(): void
    {
        self::assertMatchesRegularExpression('/^[a-z0-9]{40}$/', Miscellaneous::sha1());
    }

    public function testSha256(): void
    {
        self::assertMatchesRegularExpression('/^[a-z0-9]{64}$/', Miscellaneous::sha256());
    }

    public function testLocale(): void
    {
        self::assertMatchesRegularExpression('/^[a-z]{2,3}_[A-Z]{2}$/', Miscellaneous::locale());
    }

    public function testCountryCode(): void
    {
        self::assertMatchesRegularExpression('/^[A-Z]{2}$/', Miscellaneous::countryCode());
    }

    public function testCountryISOAlpha3(): void
    {
        self::assertMatchesRegularExpression('/^[A-Z]{3}$/', Miscellaneous::countryISOAlpha3());
    }

    public function testLanguage(): void
    {
        self::assertMatchesRegularExpression('/^[a-z]{2}$/', Miscellaneous::languageCode());
    }

    public function testCurrencyCode(): void
    {
        self::assertMatchesRegularExpression('/^[A-Z]{3}$/', Miscellaneous::currencyCode());
    }

    public function testEmoji(): void
    {
        self::assertMatchesRegularExpression('/^[\x{1F600}-\x{1F637}]$/u', Miscellaneous::emoji());
    }
}
