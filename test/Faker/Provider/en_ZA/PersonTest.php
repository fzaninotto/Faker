<?php

namespace Faker\Test\Provider\en_ZA;

use Faker\Generator;
use Faker\Provider\DateTime;
use Faker\Provider\en_ZA\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->addProvider(new DateTime($faker));
        $this->faker = $faker;
    }

    public function testIdNumberWithDefaults()
    {
        $idNumber = $this->faker->idNumber();

        $this->assertEquals(13, strlen($idNumber));
        $this->assertRegExp('#^\d{13}$#', $idNumber);
        $this->assertIsString($idNumber);
    }

    public function testIdNumberForMales()
    {
        $idNumber = $this->faker->idNumber(new \DateTime(), true, 'male');

        $genderDigit = substr($idNumber, 6, 1);

        $this->assertContains($genderDigit, ['5', '6', '7', '8', '9']);
    }

    public function testIdNumberForFemales()
    {
        $idNumber = $this->faker->idNumber(new \DateTime(), true, 'female');

        $genderDigit = substr($idNumber, 6, 1);

        $this->assertContains($genderDigit, ['0', '1', '2', '3', '4']);
    }

    public function testLicenceCode()
    {
        $validLicenceCodes = ['A', 'A1', 'B', 'C', 'C1', 'C2', 'EB', 'EC', 'EC1', 'I', 'L', 'L1'];

        $this->assertContains($this->faker->licenceCode, $validLicenceCodes);
    }

    public function testMaleTitles()
    {
        $validMaleTitles = ['Mr.', 'Dr.', 'Prof.', 'Rev.', 'Hon.'];

        $this->assertContains(Person::titleMale(), $validMaleTitles);
    }

    public function testFemaleTitles()
    {
        $validateFemaleTitles = ['Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.', 'Rev.', 'Hon.'];

        $this->assertContains(Person::titleFemale(), $validateFemaleTitles);
    }
}
