<?php

namespace Faker\Provider\en_GB;

use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class AddressTest extends TestCase
{
    public function testPostcode(): void
    {
        $postcode = $this->faker->postcode();
        self::assertNotEmpty($postcode);
        self::assertIsString($postcode);
        self::assertMatchesRegularExpression('@^(GIR ?0AA|[A-PR-UWYZ]([0-9]{1,2}|([A-HK-Y][0-9]([0-9ABEHMNPRV-Y])?)|[0-9][A-HJKPS-UW]) ?[0-9][ABD-HJLNP-UW-Z]{2})$@i', $postcode);
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);
    }
}
