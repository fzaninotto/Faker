<?php

namespace Faker\Test\Provider\pt_BR;

use Faker\Provider\pt_BR\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testCpfFormatIsValid(): void
    {
        $cpf = $this->faker->cpf(false);
        self::assertMatchesRegularExpression('/\d{9}\d{2}/', $cpf);
        $cpf = $this->faker->cpf(true);
        self::assertMatchesRegularExpression('/\d{3}\.\d{3}\.\d{3}-\d{2}/', $cpf);
    }

    public function testRgFormatIsValid(): void
    {
        $rg = $this->faker->rg(false);
        self::assertMatchesRegularExpression('/\d{8}\d/', $rg);
        $rg = $this->faker->rg(true);
        self::assertMatchesRegularExpression('/\d{2}\.\d{3}\.\d{3}-[0-9X]/', $rg);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
