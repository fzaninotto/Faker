<?php
/**
 * @author Mark van der Velden <mark@dynom.nl>
 */

namespace Faker\Test\Provider;

/**
 * Class ProviderOverrideTest
 *
 * @package Faker\Test\Provider
 *
 * This class tests a large portion of all locale specific providers. It does not test the entire stack, because each
 * locale specific provider (can) has specific implementations. The goal of this test is to test the common denominator
 * and to try to catch possible invalid multi-byte sequences.
 */
class ProviderOverrideTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new \Faker\Generator();
    }


    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testAddress($locale = null)
    {
        $faker = \Faker\Factory::create($locale);

        $this->assertRegExp('/.+/u', $faker->city);
        $this->assertRegExp('/.+/u', $faker->postcode);
        $this->assertRegExp('/.+/u', $faker->address);
        $this->assertRegExp('/.+/u', $faker->country);
    }


    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testCompany($locale = null)
    {
        $faker = \Faker\Factory::create($locale);

        $this->assertRegExp('/.+/u', $faker->company);
    }


    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testDateTime($locale = null)
    {
        $faker = \Faker\Factory::create($locale);

        $this->assertRegExp('/.+/u', $faker->century);
        $this->assertRegExp('/.+/u', $faker->timezone);
    }


    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testInternet($locale = null)
    {
        $faker = \Faker\Factory::create($locale);

        $this->assertRegExp('/.+/u', $faker->userName);

        $emailRegex = '/^(.+)@(.+)$/ui';
        $this->assertRegExp($emailRegex, $faker->email);
        $this->assertRegExp($emailRegex, $faker->safeEmail);
        $this->assertRegExp($emailRegex, $faker->freeEmail);
        $this->assertRegExp($emailRegex, $faker->companyEmail);
    }


    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testPerson($locale = null)
    {
        $faker = \Faker\Factory::create($locale);

        $this->assertRegExp('/.+/u', $faker->name);
    }


    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testPhoneNumber($locale = null)
    {
        $faker = \Faker\Factory::create($locale);

        $this->assertRegExp('/.+/u', $faker->phoneNumber);
    }


    /**
     * @dataProvider localeDataProvider
     * @param string $locale
     */
    public function testUserAgent($locale = null)
    {
        $faker = \Faker\Factory::create($locale);

        $this->assertRegExp('/.+/u', $faker->userAgent);
    }


    /**
     * @dataProvider localeDataProvider
     *
     * @param null $locale
     * @param string $locale
     */
    public function testUuid($locale = null)
    {
        $faker = \Faker\Factory::create($locale);

        $this->assertRegExp('/.+/u', $faker->uuid);
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
        static $files = array();

        if ( ! empty($files)) {
            return $files;
        }

        // Finding all PHP files in the xx_XX directories
        $providerDir = __DIR__ .'/../../../src/Faker/Provider';
        foreach (glob($providerDir .'/*_*/*.php') as $file) {
            $localisation = basename(dirname($file));

            if (isset($files[ $localisation ])) {
                continue;
            }

            $files[ $localisation ] = $localisation;
        }

        return $files;
    }
}
