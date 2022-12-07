<?php

namespace Faker\Provider\en_CA;

use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class AddressTest extends TestCase
{
    /**
     * Test the validity of province
     */
    public function testProvince(): void
    {
        $province = $this->faker->province();
        self::assertNotEmpty($province);
        self::assertIsString($province);
        self::assertMatchesRegularExpression('/[A-Z][a-z]+/', $province);
    }

    /**
     * Test the validity of province abbreviation
     */
    public function testProvinceAbbr(): void
    {
        $provinceAbbr = $this->faker->provinceAbbr();
        self::assertNotEmpty($provinceAbbr);
        self::assertIsString($provinceAbbr);
        self::assertMatchesRegularExpression('/^[A-Z]{2}$/', $provinceAbbr);
    }

    /**
     * Test the validity of postcode letter
     */
    public function testPostcodeLetter(): void
    {
        $postcodeLetter = $this->faker->randomPostcodeLetter();
        self::assertNotEmpty($postcodeLetter);
        self::assertIsString($postcodeLetter);
        self::assertMatchesRegularExpression('/^[A-Z]{1}$/', $postcodeLetter);
    }

    /**
     * Test the validity of Canadian postcode
     */
    public function testPostcode(): void
    {
        $postcode = $this->faker->postcode();
        self::assertNotEmpty($postcode);
        self::assertIsString($postcode);
        self::assertMatchesRegularExpression('/^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/', $postcode);
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);
    }
}
