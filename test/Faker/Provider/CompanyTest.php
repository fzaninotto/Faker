<?php

namespace Faker\Test\Provider;

use Faker\Provider\Company;
use Faker\Provider\Lorem;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class CompanyTest extends TestCase
{
    public function testJobTitle(): void
    {
        $jobTitle = $this->faker->jobTitle();
        $pattern = '/^[A-Za-z]+$/';
        self::assertMatchesRegularExpression($pattern, $jobTitle);
    }

    protected function getProviders(): iterable
    {
        yield new Company($this->faker);

        yield new Lorem($this->faker);
    }
}
