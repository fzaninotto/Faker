<?php

namespace Faker\Test\Provider\it_IT;

use Faker\Generator;
use Faker\Provider\it_IT\Company;
use PHPUnit\Framework\TestCase;

final class CompanyTest extends TestCase
{
    protected Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    public function testIfTaxIdCanReturnData(): void
    {
        $vatId = $this->faker->vatId();
        $this->assertMatchesRegularExpression('/^IT[0-9]{11}$/', $vatId);
    }
}
