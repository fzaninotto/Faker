<?php

namespace Faker\Test\Provider\es_ES;

use Faker\Provider\es_ES\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testDNI(): void
    {
        self::assertTrue($this->isValidDNI($this->faker->dni));
    }

    // validation taken from http://kiwwito.com/php-function-for-spanish-dni-nie-validation/
    public function isValidDNI($string)
    {
        if (strlen($string) != 9
            || preg_match('/^[XYZ]?([0-9]{7,8})([A-Z])$/i', $string, $matches) !== 1) {
            return false;
        }

        $map = 'TRWAGMYFPDXBNJZSQVHLCKE';

        [, $number, $letter] = $matches;

        return strtoupper($letter) === $map[((int) $number) % 23];
    }

    public function testLicenceCode(): void
    {
        $validLicenceCodes = ['AM', 'A1', 'A2', 'A', 'B', 'B+E', 'C1', 'C1+E', 'C', 'C+E', 'D1', 'D1+E', 'D', 'D+E'];

        self::assertContains($this->faker->licenceCode, $validLicenceCodes);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
