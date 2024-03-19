<?php

namespace Faker\Test\Provider\bn_BD;

use Faker\Generator;
use Faker\Provider\bn_BD\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    protected Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testIfFirstNameMaleCanReturnData(): void
    {
        $firstNameMale = $this->faker->firstNameMale();
        $this->assertNotEmpty($firstNameMale);
    }

    public function testIfFirstNameFemaleCanReturnData(): void
    {
        $firstNameFemale = $this->faker->firstNameFemale();
        $this->assertNotEmpty($firstNameFemale);
    }
}
