<?php

namespace Faker\Test\Provider\de_AT;

use Faker\Generator;
use Faker\Provider\de_AT\Address;
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
     * @see https://en.wikipedia.org/wiki/List_of_postal_codes_in_Austria
     */
    public function testPostcodeReturnsPostcodeThatMatchesAustrianFormat(): void
    {
        $postcode = $this->faker->postcode;

        $this->assertMatchesRegularExpression('/^[1-9]\d{3}$/', $postcode);
    }
}
