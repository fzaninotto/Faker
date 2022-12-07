<?php

namespace Faker\Test\Provider\bn_BD;

use Faker\Provider\bn_BD\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testIfFirstNameMaleCanReturnData(): void
    {
        $firstNameMale = $this->faker->firstNameMale();
        self::assertNotEmpty($firstNameMale);
    }

    public function testIfFirstNameFemaleCanReturnData(): void
    {
        $firstNameFemale = $this->faker->firstNameFemale();
        self::assertNotEmpty($firstNameFemale);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
