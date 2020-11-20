<?php

namespace Faker\Test\Provider\en_SG;

use Faker\Factory;
use Faker\Generator;
use Faker\Provider\en_SG\Person;
use Faker\Test\TestCase;

final class PersonTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = Factory::create('en_SG');
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testNric(): void
    {
        $this->assertValidSingaporeId($this->faker->nric());
    }

    public function testNricAfter2000(): void
    {
        $nric = $this->faker->nric(new \DateTime('2005-03-01'));
        $this->assertMatchesRegularExpression('/^T05[0-9]{5}[A-Z]$/', $nric);
        $this->assertValidSingaporeId($nric);
    }

    public function testNricBefore2000(): void
    {
        $nric = $this->faker->nric(new \DateTime('1993-03-01'));
        $this->assertMatchesRegularExpression('/^S93[0-9]{5}[A-Z]$/', $nric);
        $this->assertValidSingaporeId($nric);
    }

    public function testNricBefore1968(): void
    {
        $nric = $this->faker->nric(new \DateTime('1967-12-31'));
        $this->assertMatchesRegularExpression('/^S0[0-1][0-9]{5}[A-Z]$/', $nric);
        $this->assertValidSingaporeId($nric);
    }

    public function testFin(): void
    {
        $this->assertValidSingaporeId($this->faker->fin());
    }

    public function testFinAfter2000(): void
    {
        $fin = $this->faker->fin(new \DateTime('2005-03-01'));
        $this->assertMatchesRegularExpression('/^G[0-9]{7}[A-Z]$/', $fin);
        $this->assertValidSingaporeId($fin);
    }

    public function testFinBefore2000(): void
    {
        $fin = $this->faker->fin(new \DateTime('1993-03-01'));
        $this->assertMatchesRegularExpression('/^F[0-9]{7}[A-Z]$/', $fin);
        $this->assertValidSingaporeId($fin);
    }

    public function assertValidSingaporeId(string $id): void
    {
        $prefix = $id[0];
        $weights = [2, 7, 6, 5, 4, 3, 2];
        $checksum = in_array($prefix, ['T', 'G'], true) ? 4 : 0;

        foreach ($weights as $key => $weight) {
            $checksum += (int) $id[$key+1] * $weight;
        }

        $checksumArr = in_array($prefix, ['F', 'G'])
            ? ['X', 'W', 'U', 'T', 'R', 'Q', 'P', 'N', 'M', 'L', 'K']
            : ['J', 'Z', 'I', 'H', 'G', 'F', 'E', 'D', 'C', 'B', 'A'];

        $this->assertSame($checksumArr[$checksum % 11], $id[8], sprintf('Invalid checksum for NRIC/FIN: %s', $id));
    }
}
