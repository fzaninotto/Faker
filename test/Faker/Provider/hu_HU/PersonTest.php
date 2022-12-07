<?php

namespace Faker\Test\Provider\hu_HU;

use Faker\Provider\hu_HU\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testValidMariedFemaleLastnames(): void
    {
        self::assertEquals('Báró Vassné Zsóka', $this->faker->name('female'));
        self::assertEquals('Prof. Szőke Bendegúz', $this->faker->name('female'));
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
