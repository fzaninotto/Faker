<?php

namespace Faker\Test\Provider\fr_CH;

use Faker\Calculator\Ean;
use Faker\Provider\fr_CH\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testAvs13Number(): void
    {
        $avs = $this->faker->avs13;
        self::assertMatchesRegularExpression('/^756\.([0-9]{4})\.([0-9]{4})\.([0-9]{2})$/', $avs);
        self::assertTrue(Ean::isValid(str_replace('.', '', $avs)));
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
