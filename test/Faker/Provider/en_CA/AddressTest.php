<?php

namespace Faker\Provider\en_CA;

use Faker\Generator;
use Faker\Provider\en_CA\Address;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{

  /**
   * @var Generator
   */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

  /**
   * Test the validity of province
   */
    public function testProvince()
    {
        $province = $this->faker->province();
        $this->assertNotEmpty($province);
        $this->assertIsString($province);
        $this->assertRegExp('/[A-Z][a-z]+/', $province);
    }

  /**
   * Test the validity of province abbreviation
   */
    public function testProvinceAbbr()
    {
        $provinceAbbr = $this->faker->provinceAbbr();
        $this->assertNotEmpty($provinceAbbr);
        $this->assertIsString($provinceAbbr);
        $this->assertRegExp('/^[A-Z]{2}$/', $provinceAbbr);
    }

  /**
   * Test the validity of postcode letter
   */
    public function testPostcodeLetter()
    {
        $postcodeLetter = $this->faker->randomPostcodeLetter();
        $this->assertNotEmpty($postcodeLetter);
        $this->assertIsString($postcodeLetter);
        $this->assertRegExp('/^[A-Z]{1}$/', $postcodeLetter);
    }

  /**
   * Test the validity of Canadian postcode
   */
    public function testPostcode()
    {
        $postcode = $this->faker->postcode();
        $this->assertNotEmpty($postcode);
        $this->assertIsString($postcode);
        $this->assertRegExp('/^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/', $postcode);
    }
}
