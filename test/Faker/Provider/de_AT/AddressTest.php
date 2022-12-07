<?php

namespace Faker\Test\Provider\de_AT;

use Faker\Provider\de_AT\Address;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class AddressTest extends TestCase
{
    /**
     * @see https://en.wikipedia.org/wiki/List_of_postal_codes_in_Austria
     */
    public function testPostcodeReturnsPostcodeThatMatchesAustrianFormat(): void
    {
        $postcode = $this->faker->postcode;

        self::assertMatchesRegularExpression('/^[1-9]\d{3}$/', $postcode);
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);
    }
}
