<?php

namespace Faker\Test\Provider\es_ES;

use Faker\Generator;
use Faker\Provider\es_ES\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    protected Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->seed(1);
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testDNI(): void
    {
        $dni = $this->faker->dni;
        $this->assertTrue($this->isValidDNI($dni));
    }

    // validation taken from http://kiwwito.com/php-function-for-spanish-dni-nie-validation/
    public function isValidDNI($string): bool
    {
        if (9 !== \strlen($string)
            || 1 !== \preg_match('/^[XYZ]?([0-9]{7,8})([A-Z])$/i', $string, $matches)) {
            return false;
        }

        $map = 'TRWAGMYFPDXBNJZSQVHLCKE';

        [, $number, $letter] = $matches;

        return \strtoupper($letter) === $map[((int) $number) % 23];
    }

    public function testLicenceCode(): void
    {
        $validLicenceCodes = ['AM', 'A1', 'A2', 'A', 'B', 'B+E', 'C1', 'C1+E', 'C', 'C+E', 'D1', 'D1+E', 'D', 'D+E'];

        $this->assertContains($this->faker->licenceCode, $validLicenceCodes);
    }
}
