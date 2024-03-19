<?php

namespace Faker\Test\Provider\de_CH;

use Faker\Calculator\Ean;
use Faker\Generator;
use Faker\Provider\de_CH\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    private Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testAvs13Number(): void
    {
        $avs = $this->faker->avs13;
        $this->assertMatchesRegularExpression('/^756\.([0-9]{4})\.([0-9]{4})\.([0-9]{2})$/', $avs);
        $this->assertTrue(Ean::isValid(\str_replace('.', '', $avs)));
    }

    public function testAhv13Number(): void
    {
        $ahv = $this->faker->ahv13;
        $this->assertMatchesRegularExpression('/^756\.([0-9]{4})\.([0-9]{4})\.([0-9]{2})$/', $ahv);
        $this->assertTrue(Ean::isValid(\str_replace('.', '', $ahv)));
    }
}
