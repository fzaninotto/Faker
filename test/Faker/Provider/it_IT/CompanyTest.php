<?php

namespace Faker\Test\Provider\it_IT;

use Faker\Provider\it_IT\Company;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class CompanyTest extends TestCase
{
    public function testIfTaxIdCanReturnData()
    {
        $vatId = $this->faker->vatId();
        self::assertMatchesRegularExpression('/^IT[0-9]{11}$/', $vatId);
    }

    protected function getProviders(): iterable
    {
        yield new Company($this->faker);
    }
}
