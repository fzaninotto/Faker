<?php

namespace Faker\Test\Provider\kk_KZ;

use Faker\Provider\DateTime;
use Faker\Provider\kk_KZ\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    /**
     * Note! When calculating individual identification number
     *   2000-01-01 - 2000-12-31 counts as 21th century
     *   1900-01-01 - 1900-12-31 counts as 20th century
     */
    public function testIndividualIdentificationNumberIsValid(): void
    {
        // 21st century.
        $birthDate = DateTime::dateTimeBetween('2000-01-01', '2099-12-31');
        $individualIdentificationNumber = $this->faker->individualIdentificationNumber($birthDate, Person::GENDER_MALE);
        self::assertSame(Person::MALE_CENTURY_21ST, (int) $individualIdentificationNumber[6]);
        self::assertSame(Person::checkSum($individualIdentificationNumber), (int) $individualIdentificationNumber[11]);
        $individualIdentificationNumber = $this->faker->individualIdentificationNumber($birthDate, Person::GENDER_FEMALE);
        self::assertSame(Person::FEMALE_CENTURY_21ST, (int) $individualIdentificationNumber[6]);
        self::assertSame(Person::checkSum($individualIdentificationNumber), (int) $individualIdentificationNumber[11]);
        // 20th century.
        $birthDate = DateTime::dateTimeBetween('1900-01-01', '1999-12-31');
        $individualIdentificationNumber = $this->faker->individualIdentificationNumber($birthDate, Person::GENDER_MALE);
        self::assertSame(Person::checkSum($individualIdentificationNumber), (int) $individualIdentificationNumber[11]);
        self::assertSame(Person::MALE_CENTURY_20TH, (int) $individualIdentificationNumber[6]);
        $individualIdentificationNumber = $this->faker->individualIdentificationNumber($birthDate, Person::GENDER_FEMALE);
        self::assertSame(Person::checkSum($individualIdentificationNumber), (int) $individualIdentificationNumber[11]);
        self::assertSame(Person::FEMALE_CENTURY_20TH, (int) $individualIdentificationNumber[6]);
        // 19th century.
        $birthDate = DateTime::dateTimeBetween('1800-01-01', '1899-12-31');
        $individualIdentificationNumber = $this->faker->individualIdentificationNumber($birthDate, Person::GENDER_MALE);
        self::assertSame(Person::checkSum($individualIdentificationNumber), (int) $individualIdentificationNumber[11]);
        self::assertSame(Person::MALE_CENTURY_19TH, (int) $individualIdentificationNumber[6]);
        $individualIdentificationNumber = $this->faker->individualIdentificationNumber($birthDate, Person::GENDER_FEMALE);
        self::assertSame(Person::checkSum($individualIdentificationNumber), (int) $individualIdentificationNumber[11]);
        self::assertSame(Person::FEMALE_CENTURY_19TH, (int) $individualIdentificationNumber[6]);
        // 22th century
        self::expectException(\InvalidArgumentException::class);
        self::expectExceptionMessage('Unexpected century');
        $birthDate = DateTime::dateTimeBetween('2100-01-01', '2199-12-31');
        $this->faker->individualIdentificationNumber($birthDate);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
