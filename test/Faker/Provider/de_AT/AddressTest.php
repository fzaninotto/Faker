<?php

namespace Faker\Test\Provider\de_AT;


use Faker\Generator;
use Faker\Provider\de_AT\Address;
use PHPUnit\Framework\TestCase;

final class AddressTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();

        $faker->addProvider(new Address($faker));

        $this->faker = $faker;
    }

    /**
     * @see https://en.wikipedia.org/wiki/List_of_postal_codes_in_Austria
     */
    public function testPostcodeReturnsPostcodeThatMatchesAustrianFormat()
    {
        $postcode = $this->faker->postcode;

        $this->assertRegExp('/^[1-9]\d{3}$/', $postcode);
    }
}
