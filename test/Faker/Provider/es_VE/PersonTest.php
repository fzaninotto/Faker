<?php

namespace Faker\Test\Provider\es_VE;

use Faker\Provider\es_VE\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testNationalId(): void
    {
        $pattern = '/(?:^V-?\d{5,9}$)|(?:^E-?\d{8,9}$)/';

        $cedula = $this->faker->nationalId;
        self::assertMatchesRegularExpression($pattern, $cedula);

        $cedula = $this->faker->nationalId('-');
        self::assertMatchesRegularExpression($pattern, $cedula);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
