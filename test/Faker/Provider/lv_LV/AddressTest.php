<?php

namespace Faker\Test\Provider\lv_LV;

use Faker\Provider\lv_LV\Address;
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
        self::assertMatchesRegularExpression('/LV-\d{4}/', $postcode);
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);
    }
}
