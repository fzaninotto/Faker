<?php

namespace Faker\Test\Provider\en_ZA;

use Faker\Provider\DateTime;
use Faker\Provider\en_ZA\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testIdNumberWithDefaults(): void
    {
        $idNumber = $this->faker->idNumber();

        self::assertEquals(13, strlen($idNumber));
        self::assertMatchesRegularExpression('#^\d{13}$#', $idNumber);
        self::assertIsString($idNumber);
    }

    public function testIdNumberForMales(): void
    {
        $idNumber = $this->faker->idNumber(new \DateTime(), true, 'male');

        $genderDigit = substr($idNumber, 6, 1);

        self::assertContains($genderDigit, ['5', '6', '7', '8', '9']);
    }

    public function testIdNumberForFemales(): void
    {
        $idNumber = $this->faker->idNumber(new \DateTime(), true, 'female');

        $genderDigit = substr($idNumber, 6, 1);

        self::assertContains($genderDigit, ['0', '1', '2', '3', '4']);
    }

    public function testLicenceCode(): void
    {
        $validLicenceCodes = ['A', 'A1', 'B', 'C', 'C1', 'C2', 'EB', 'EC', 'EC1', 'I', 'L', 'L1'];

        self::assertContains($this->faker->licenceCode, $validLicenceCodes);
    }

    public function testMaleTitles(): void
    {
        $validMaleTitles = ['Mr.', 'Dr.', 'Prof.', 'Rev.', 'Hon.'];

        self::assertContains(Person::titleMale(), $validMaleTitles);
    }

    public function testFemaleTitles(): void
    {
        $validateFemaleTitles = ['Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.', 'Rev.', 'Hon.'];

        self::assertContains(Person::titleFemale(), $validateFemaleTitles);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);

        yield new DateTime($this->faker);
    }
}
