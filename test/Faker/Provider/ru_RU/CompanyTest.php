<?php

namespace Faker\Test\Provider\ru_RU;

use Faker\Provider\ru_RU\Company;
use Faker\Test\TestCase;

final class CompanyTest extends TestCase
{
    public function testINN()
    {
        self::assertMatchesRegularExpression('/^[0-9]{10}$/', $this->faker->inn);
        self::assertEquals("77", substr($this->faker->inn("77"), 0, 2));
        self::assertEquals("02", substr($this->faker->inn(2), 0, 2));
    }

    public function testKPP()
    {
        self::assertMatchesRegularExpression('/^[0-9]{9}$/', $this->faker->kpp);
        self::assertEquals("01001", substr($this->faker->kpp, -5, 5));
        $inn = $this->faker->inn;
        self::assertEquals(substr($inn, 0, 4), substr($this->faker->kpp($inn), 0, 4));
    }

    public function testCatchPhrase()
    {
        $phrase = $this->faker->catchPhrase;
        self::assertNotNull($phrase);
        self::assertGreaterThanOrEqual(
            3,
            count(explode(' ', $this->faker->catchPhrase)),
            "'$phrase' - should be contain 3 word"
        );
    }

    protected function getProviders(): iterable
    {
        yield new Company($this->faker);
    }
}
