<?php

namespace Faker\Provider\en_GB;

use Faker\Generator;
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


    public function testPostcode()
    {

        $postcode = $this->faker->postcode();
        $this->assertNotEmpty($postcode);
        $this->assertIsString($postcode);
        $this->assertRegExp('@^(GIR ?0AA|[A-PR-UWYZ]([0-9]{1,2}|([A-HK-Y][0-9]([0-9ABEHMNPRV-Y])?)|[0-9][A-HJKPS-UW]) ?[0-9][ABD-HJLNP-UW-Z]{2})$@i', $postcode);
    }
}
