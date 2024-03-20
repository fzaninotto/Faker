<?php

namespace Faker\Test\Provider;

use Faker\Provider\Miscellaneous;
use PHPUnit\Framework\TestCase;

final class MiscellaneousTest extends TestCase
{
    public function testBoolean(): void
    {
        $this->assertContains(Miscellaneous::boolean(), [true, false]);
    }

    public function testMd5(): void
    {
        $this->assertMatchesRegularExpression('/^[a-z0-9]{32}$/', Miscellaneous::md5());
    }

    public function testSha1(): void
    {
        $this->assertMatchesRegularExpression('/^[a-z0-9]{40}$/', Miscellaneous::sha1());
    }

    public function testSha256(): void
    {
        $this->assertMatchesRegularExpression('/^[a-z0-9]{64}$/', Miscellaneous::sha256());
    }

    public function testLocale(): void
    {
        $this->assertMatchesRegularExpression('/^[a-z]{2,3}_[A-Z]{2}$/', Miscellaneous::locale());
    }

    public function testCountryCode(): void
    {
        $this->assertMatchesRegularExpression('/^[A-Z]{2}$/', Miscellaneous::countryCode());
    }

    public function testCountryISOAlpha3(): void
    {
        $this->assertMatchesRegularExpression('/^[A-Z]{3}$/', Miscellaneous::countryISOAlpha3());
    }

    public function testLanguage(): void
    {
        $this->assertMatchesRegularExpression('/^[a-z]{2}$/', Miscellaneous::languageCode());
    }

    public function testCurrencyCode(): void
    {
        $this->assertMatchesRegularExpression('/^[A-Z]{3}$/', Miscellaneous::currencyCode());
    }

    public function testEmoji(): void
    {
        $this->assertMatchesRegularExpression('/^[\x{1F600}-\x{1F637}]$/u', Miscellaneous::emoji());
    }
}
