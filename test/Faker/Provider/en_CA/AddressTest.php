<?php

namespace Faker\Provider\en_CA;

use Faker\Generator;
use PHPUnit\Framework\TestCase;

final class AddressTest extends TestCase
{
    private Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    /**
     * Test the validity of province.
     */
    public function testProvince(): void
    {
        $province = $this->faker->province();
        $this->assertNotEmpty($province);
        $this->assertIsString($province);
        $this->assertMatchesRegularExpression('/[A-Z][a-z]+/', $province);
    }

    /**
     * Test the validity of province abbreviation.
     */
    public function testProvinceAbbr(): void
    {
        $provinceAbbr = $this->faker->provinceAbbr();
        $this->assertNotEmpty($provinceAbbr);
        $this->assertIsString($provinceAbbr);
        $this->assertMatchesRegularExpression('/^[A-Z]{2}$/', $provinceAbbr);
    }

    /**
     * Test the validity of postcode letter.
     */
    public function testPostcodeLetter(): void
    {
        $postcodeLetter = $this->faker->randomPostcodeLetter();
        $this->assertNotEmpty($postcodeLetter);
        $this->assertIsString($postcodeLetter);
        $this->assertMatchesRegularExpression('/^[A-Z]{1}$/', $postcodeLetter);
    }

    /**
     * Test the validity of Canadian postcode.
     */
    public function testPostcode(): void
    {
        $postcode = $this->faker->postcode();
        $this->assertNotEmpty($postcode);
        $this->assertIsString($postcode);
        $this->assertMatchesRegularExpression('/^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/', $postcode);
    }
}
