<?php
namespace Faker\Test\Provider\kk_KZ;

use Faker\Generator;
use Faker\Provider\DateTime;
use Faker\Provider\kk_KZ\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->faker = new Generator();

        $this->faker->addProvider(new Person($this->faker));
    }

    public function testIndividualIdentificationNumberIsValid()
    {
        $birthDate                      = DateTime::dateTimeBetween('-30 years', '-10 years');
        $individualIdentificationNumber = $this->faker->individualIdentificationNumber($birthDate);
        $controlDigit                   = Person::checkSum($individualIdentificationNumber);

        $this->assertTrue($controlDigit === (int)substr($individualIdentificationNumber, 11, 1));
    }
}
