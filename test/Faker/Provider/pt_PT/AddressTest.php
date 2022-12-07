<?php

namespace Faker\Test\Provider\pt_PT;

use Faker\Provider\pt_PT\Address;
use Faker\Provider\pt_PT\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class AddressTest extends TestCase
{
    public function testPostCodeIsValid(): void
    {
        $main = '[1-9]{1}[0-9]{2}[0,1,4,5,9]{1}';
        $pattern = "/^($main)|($main-[0-9]{3})+$/";
        $postcode = $this->faker->postcode();
        self::assertSame(preg_match($pattern, $postcode), 1, $postcode);
    }

    public function testAddressIsSingleLine(): void
    {
        $this->faker->addProvider(new Person($this->faker));

        $address = $this->faker->address();
        self::assertFalse(strstr($address, "\n"));
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);
    }
}
