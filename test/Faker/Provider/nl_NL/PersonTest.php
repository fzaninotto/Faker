<?php

namespace Faker\Test\Provider\nl_NL;

use Faker\Provider\nl_NL\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testGenerateValidIdNumber(): void
    {
        $idNumber = $this->faker->idNumber();
        self::assertEquals(9, strlen($idNumber));

        $sum = -1 * $idNumber % 10;

        for ($multiplier = 2; $idNumber > 0; ++$multiplier) {
            $val = (int) ($idNumber /= 10) % 10;
            $sum += $multiplier * $val;
        }
        self::assertTrue($sum != 0 && $sum % 11 == 0);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
