<?php

namespace Faker\Test\Provider\pl_PL;

use Faker\Provider\pl_PL\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testPeselLenght(): void
    {
        $pesel = $this->faker->pesel();

        self::assertEquals(11, strlen($pesel));
    }

    public function testPeselDate(): void
    {
        $date = new \DateTime('1990-01-01');
        $pesel = $this->faker->pesel($date);

        self::assertEquals('90', substr($pesel, 0, 2));
        self::assertEquals('01', substr($pesel, 2, 2));
        self::assertEquals('01', substr($pesel, 4, 2));
    }

    public function testPeselDateWithYearAfter2000(): void
    {
        $date = new \DateTime('2001-01-01');
        $pesel = $this->faker->pesel($date);

        self::assertEquals('01', substr($pesel, 0, 2));
        self::assertEquals('21', substr($pesel, 2, 2));
        self::assertEquals('01', substr($pesel, 4, 2));
    }

    public function testPeselDateWithYearAfter2100(): void
    {
        $date = new \DateTime('2101-01-01');
        $pesel = $this->faker->pesel($date);

        self::assertEquals('01', substr($pesel, 0, 2));
        self::assertEquals('41', substr($pesel, 2, 2));
        self::assertEquals('01', substr($pesel, 4, 2));
    }

    public function testPeselDateWithYearAfter2200(): void
    {
        $date = new \DateTime('2201-01-01');
        $pesel = $this->faker->pesel($date);

        self::assertEquals('01', substr($pesel, 0, 2));
        self::assertEquals('61', substr($pesel, 2, 2));
        self::assertEquals('01', substr($pesel, 4, 2));
    }

    public function testPeselDateWithYearBefore1900(): void
    {
        $date = new \DateTime('1801-01-01');
        $pesel = $this->faker->pesel($date);

        self::assertEquals('01', substr($pesel, 0, 2));
        self::assertEquals('81', substr($pesel, 2, 2));
        self::assertEquals('01', substr($pesel, 4, 2));
    }

    public function testPeselSex(): void
    {
        $male = $this->faker->pesel(null, 'M');
        $female = $this->faker->pesel(null, 'F');

        self::assertEquals(1, $male[9] % 2);
        self::assertEquals(0, $female[9] % 2);
    }

    public function testPeselCheckSum(): void
    {
        $pesel = $this->faker->pesel();
        $weights = [1, 3, 7, 9, 1, 3, 7, 9, 1, 3, 1];
        $sum = 0;

        foreach ($weights as $key => $weight) {
            $sum += $pesel[$key] * $weight;
        }

        self::assertEquals(0, $sum % 10);
    }

    public function testTitle(): void
    {
        self::assertContains($this->faker->titleFemale(), ['mgr', 'inż.', 'dr', 'doc.']);
        self::assertContains($this->faker->titleMale(), ['mgr', 'inż.', 'dr', 'doc.']);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
