<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Generator;
use Faker\Provider\fr_FR\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    private Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testNIRReturnsTheRightGender(): void
    {
        $nir = $this->faker->nir(\Faker\Provider\Person::GENDER_MALE);
        $this->assertStringStartsWith('1', $nir);
    }

    public function testNIRReturnsTheRightPattern(): void
    {
        $nir = $this->faker->nir;
        $this->assertMatchesRegularExpression("/^[12]\d{5}[0-9A-B]\d{8}$/", $nir);
    }

    public function testNIRFormattedReturnsTheRightPattern(): void
    {
        $nir = $this->faker->nir(null, true);
        $this->assertMatchesRegularExpression("/^[12]\s\d{2}\s\d{2}\s\d{1}[0-9A-B]\s\d{3}\s\d{3}\s\d{2}$/", $nir);
    }
}
