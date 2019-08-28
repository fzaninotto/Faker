<?php
/**
 * @author Mark van der Velden <mark@dynom.nl>
 */

namespace Faker\Test\Provider;

use Faker;
use PHPUnit\Framework\TestCase;

/**
 * Class ProviderOverrideTest
 *
 * @package Faker\Test\Provider
 *
 * This class tests a large portion of all locale specific providers. It does not test the entire stack, because each
 * locale specific provider (can) has specific implementations. The goal of this test is to test the common denominator
 * and to try to catch possible invalid multi-byte sequences.
 */
class ProviderOverrideTest extends TestCase
{
    /**
     * Constants with regular expression patterns for testing the output.
     *
     * Regular expressions are sensitive for malformed strings (e.g.: strings with incorrect encodings) so by using
     * PCRE for the tests, even though they seem fairly pointless, we test for incorrect encodings also.
     */
    const TEST_STRING_REGEX = '/.+/u';

    /**
     * Slightly more specific for e-mail, the point isn't to properly validate e-mails.
     */
    const TEST_EMAIL_REGEX = '/^(.+)@(.+)$/ui';

    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testAddress($locale = null)
    {
        $faker = Faker\Factory::create($locale);

        $this->assertRegExp(static::TEST_STRING_REGEX, $faker->city);
        $this->assertRegExp(static::TEST_STRING_REGEX, $faker->postcode);
        $this->assertRegExp(static::TEST_STRING_REGEX, $faker->address);
        $this->assertRegExp(static::TEST_STRING_REGEX, $faker->country);
    }


    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testCompany($locale = null)
    {
        $faker = Faker\Factory::create($locale);

        $this->assertRegExp(static::TEST_STRING_REGEX, $faker->company);
    }


    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testDateTime($locale = null)
    {
        $faker = Faker\Factory::create($locale);

        $this->assertRegExp(static::TEST_STRING_REGEX, $faker->century);
        $this->assertRegExp(static::TEST_STRING_REGEX, $faker->timezone);
    }


    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testInternet($locale = null)
    {
        if ($locale && $locale !== 'en_US' && !class_exists('Transliterator')) {
            $this->markTestSkipped('Transliterator class not available (intl extension)');
        }

        $faker = Faker\Factory::create($locale);

        $this->assertRegExp(static::TEST_STRING_REGEX, $faker->userName);

        $this->assertRegExp(static::TEST_EMAIL_REGEX, $faker->email);
        $this->assertRegExp(static::TEST_EMAIL_REGEX, $faker->safeEmail);
        $this->assertRegExp(static::TEST_EMAIL_REGEX, $faker->freeEmail);
        $this->assertRegExp(static::TEST_EMAIL_REGEX, $faker->companyEmail);
    }


    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testPerson($locale = null)
    {
        $faker = Faker\Factory::create($locale);

        $this->assertRegExp(static::TEST_STRING_REGEX, $faker->name);
        $this->assertRegExp(static::TEST_STRING_REGEX, $faker->title);
        $this->assertRegExp(static::TEST_STRING_REGEX, $faker->firstName);
        $this->assertRegExp(static::TEST_STRING_REGEX, $faker->lastName);
    }


    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testPhoneNumber($locale = null)
    {
        $faker = Faker\Factory::create($locale);

        $this->assertRegExp(static::TEST_STRING_REGEX, $faker->phoneNumber);
    }


    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testUserAgent($locale = null)
    {
        $faker = Faker\Factory::create($locale);

        $this->assertRegExp(static::TEST_STRING_REGEX, $faker->userAgent);
    }


    /**
     * @dataProvider localeDataProvider
     *
     * @param null   $locale
     * @param string $locale
     */
    public function testUuid($locale = null)
    {
        $faker = Faker\Factory::create($locale);

        $this->assertRegExp(static::TEST_STRING_REGEX, $faker->uuid);
    }


    /**
     * @return array
     */
    public function localeDataProvider()
    {
        $locales = $this->getAllLocales();
        $data = array();

        foreach ($locales as $locale) {
            $data[] = array(
                $locale
            );
        }

        return $data;
    }


    /**
     * Returns all locales as array values
     *
     * @return array
     */
    private function getAllLocales()
    {
        static $locales = array();

        if ( ! empty($locales)) {
            return $locales;
        }

        // Finding all PHP files in the xx_XX directories
        $providerDir = __DIR__ .'/../../../src/Faker/Provider';
        foreach (glob($providerDir .'/*_*/*.php') as $file) {
            $localisation = basename(dirname($file));

            if (isset($locales[ $localisation ])) {
                continue;
            }

            $locales[ $localisation ] = $localisation;
        }

        return $locales;
    }
}
