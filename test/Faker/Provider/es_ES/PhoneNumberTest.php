<?php

namespace Faker\Test\Provider\es_ES;

use Faker\Generator;
use Faker\Provider\es_ES\PhoneNumber;
use PHPUnit\Framework\TestCase;

final class PhoneNumberTest extends TestCase
{
    protected Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testMobileNumber(): void
    {
        $this->assertNotEquals('', $this->faker->mobileNumber());
    }

    public function testTollFreeNumber(): void
    {
        $this->assertEquals(11, \strlen($this->faker->tollFreeNumber()));
    }
}
