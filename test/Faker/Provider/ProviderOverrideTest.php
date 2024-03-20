<?php

namespace Faker\Test\Provider;

use Faker;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ProviderOverrideTest extends TestCase
{
    /**
     * Constants with regular expression patterns for testing the output.
     *
     * Regular expressions are sensitive for malformed strings (e.g.: strings with incorrect encodings) so by using
     * PCRE for the tests, even though they seem fairly pointless, we test for incorrect encodings also.
     */
    public const TEST_STRING_REGEX = '/.+/u';

    /**
     * Slightly more specific for e-mail, the point isn't to properly validate e-mails.
     */
    public const TEST_EMAIL_REGEX = '/^(.+)@(.+)$/ui';

    #[DataProvider('localeDataProvider')]
    public function testAddress(?string $locale = null): void
    {
        $faker = Faker\Factory::create($locale);

        $this->assertMatchesRegularExpression(self::TEST_STRING_REGEX, $faker->city);
        $this->assertMatchesRegularExpression(self::TEST_STRING_REGEX, $faker->postcode);
        $this->assertMatchesRegularExpression(self::TEST_STRING_REGEX, $faker->address);
        $this->assertMatchesRegularExpression(self::TEST_STRING_REGEX, $faker->country);
    }

    #[DataProvider('localeDataProvider')]
    public function testCompany(?string $locale = null): void
    {
        $faker = Faker\Factory::create($locale);

        $this->assertMatchesRegularExpression(self::TEST_STRING_REGEX, $faker->company);
    }

    #[DataProvider('localeDataProvider')]
    public function testDateTime(?string $locale = null): void
    {
        $faker = Faker\Factory::create($locale);

        $this->assertMatchesRegularExpression(self::TEST_STRING_REGEX, $faker->century);
        $this->assertMatchesRegularExpression(self::TEST_STRING_REGEX, $faker->timezone);
    }

    #[DataProvider('localeDataProvider')]
    public function testInternet(?string $locale = null): void
    {
        if ($locale && 'en_US' !== $locale && !\class_exists('Transliterator')) {
            $this->markTestSkipped('Transliterator class not available (intl extension)');
        }

        $faker = Faker\Factory::create($locale);

        $this->assertMatchesRegularExpression(self::TEST_STRING_REGEX, $faker->userName);

        $this->assertMatchesRegularExpression(self::TEST_EMAIL_REGEX, $faker->email);
        $this->assertMatchesRegularExpression(self::TEST_EMAIL_REGEX, $faker->safeEmail);
        $this->assertMatchesRegularExpression(self::TEST_EMAIL_REGEX, $faker->freeEmail);
        $this->assertMatchesRegularExpression(self::TEST_EMAIL_REGEX, $faker->companyEmail);
    }

    #[DataProvider('localeDataProvider')]
    public function testPerson(?string $locale = null): void
    {
        $faker = Faker\Factory::create($locale);

        $this->assertMatchesRegularExpression(self::TEST_STRING_REGEX, $faker->name);
        $this->assertMatchesRegularExpression(self::TEST_STRING_REGEX, $faker->title);
        $this->assertMatchesRegularExpression(self::TEST_STRING_REGEX, $faker->firstName);
        $this->assertMatchesRegularExpression(self::TEST_STRING_REGEX, $faker->lastName);
    }

    #[DataProvider('localeDataProvider')]
    public function testPhoneNumber(?string $locale = null): void
    {
        $faker = Faker\Factory::create($locale);

        $this->assertMatchesRegularExpression(self::TEST_STRING_REGEX, $faker->phoneNumber);
    }

    #[DataProvider('localeDataProvider')]
    public function testUserAgent(?string $locale = null): void
    {
        $faker = Faker\Factory::create($locale);

        $this->assertMatchesRegularExpression(self::TEST_STRING_REGEX, $faker->userAgent);
    }

    #[DataProvider('localeDataProvider')]
    public function testUuid($locale = null): void
    {
        $faker = Faker\Factory::create($locale);

        $this->assertMatchesRegularExpression(self::TEST_STRING_REGEX, $faker->uuid);
    }

    public static function localeDataProvider(): array
    {
        $locales = self::getAllLocales();
        $data = [];

        foreach ($locales as $locale) {
            $data[] = [
                $locale,
            ];
        }

        return $data;
    }

    /**
     * Returns all locales as array values.
     */
    private static function getAllLocales(): array
    {
        static $locales = [];

        if (!empty($locales)) {
            return $locales;
        }

        // Finding all PHP files in the xx_XX directories
        $providerDir = __DIR__.'/../../../src/Faker/Provider';
        foreach (\glob($providerDir.'/*_*/*.php') as $file) {
            $localisation = \basename(\dirname($file));

            if (isset($locales[$localisation])) {
                continue;
            }

            $locales[$localisation] = $localisation;
        }

        return $locales;
    }
}
