<?php

namespace Faker\Test\Provider\zh_TW;

use Faker\Provider\zh_TW\Company;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class CompanyTest extends TestCase
{
    public function testVAT(): void
    {
        self::assertEquals(8, floor(log10($this->faker->VAT) + 1));
    }

    protected function getProviders(): iterable
    {
        yield new Company($this->faker);
    }
}
