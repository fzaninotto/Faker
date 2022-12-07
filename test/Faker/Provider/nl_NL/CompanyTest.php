<?php

namespace Faker\Test\Provider\nl_NL;

use Faker\Provider\nl_NL\Company;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class CompanyTest extends TestCase
{
    public function testGenerateValidVatNumber(): void
    {
        $vatNo = $this->faker->vat();

        self::assertEquals(14, strlen($vatNo));
        self::assertMatchesRegularExpression('/^NL[0-9]{9}B[0-9]{2}$/', $vatNo);
    }

    public function testGenerateValidBtwNumberAlias(): void
    {
        $btwNo = $this->faker->btw();

        self::assertEquals(14, strlen($btwNo));
        self::assertMatchesRegularExpression('/^NL[0-9]{9}B[0-9]{2}$/', $btwNo);
    }

    protected function getProviders(): iterable
    {
        yield new Company($this->faker);
    }
}
