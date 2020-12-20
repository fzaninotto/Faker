<?php

namespace Faker\Test\Provider\kk_KZ;

use Faker\Provider\DateTime;
use Faker\Provider\kk_KZ\Person;
use Faker\Test\TestCase;

final class PersonTest extends TestCase
{
    public function testIndividualIdentificationNumberIsValid()
    {
        $birthDate = DateTime::dateTimeBetween('-30 years', '-10 years');
        $individualIdentificationNumber = $this->faker->individualIdentificationNumber($birthDate);
        $controlDigit = Person::checkSum($individualIdentificationNumber);

        self::assertSame($controlDigit, (int) substr($individualIdentificationNumber, 11, 1));
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
