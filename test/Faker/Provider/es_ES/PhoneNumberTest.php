<?php

namespace Faker\Test\Provider\es_ES;

use Faker\Provider\es_ES\PhoneNumber;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PhoneNumberTest extends TestCase
{
    public function testMobileNumber(): void
    {
        self::assertNotEquals('', $this->faker->mobileNumber());
    }

    public function testTollFreeNumber(): void
    {
        self::assertEquals(11, strlen($this->faker->tollFreeNumber()));
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
