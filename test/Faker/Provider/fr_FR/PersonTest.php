<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Provider\fr_FR\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testNIRReturnsTheRightGender(): void
    {
        $nir = $this->faker->nir(\Faker\Provider\Person::GENDER_MALE);
        self::assertStringStartsWith('1', $nir);
    }

    public function testNIRReturnsTheRightPattern(): void
    {
        $nir = $this->faker->nir;
        self::assertMatchesRegularExpression("/^[12]\d{5}[0-9A-B]\d{8}$/", $nir);
    }

    public function testNIRFormattedReturnsTheRightPattern(): void
    {
        $nir = $this->faker->nir(null, true);
        self::assertMatchesRegularExpression("/^[12]\s\d{2}\s\d{2}\s\d{1}[0-9A-B]\s\d{3}\s\d{3}\s\d{2}$/", $nir);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
