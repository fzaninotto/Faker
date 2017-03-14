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
        $sum                            = 0;

        for ($i = 0; $i <= 10; $i++) {
            $calculatedResult[$i] = (int)substr($individualIdentificationNumber, $i, 1);
            $sum += $calculatedResult[$i] * Person::$firstSequenceBitWeights[$i];
        }

        $controlDigit = $sum % 11;

        if ($controlDigit === 10) {
            $sum = 0;

            for ($i = 0; $i <= 10; $i++) {
                $calculatedResult[$i] = (int)substr($individualIdentificationNumber, $i, 1);
                $sum += $calculatedResult[$i] * Person::$secondSequenceBitWeights[$i];
            }

            $controlDigit = $sum % 11;
        }

        $this->assertTrue($controlDigit === (int)substr($individualIdentificationNumber, 11, 1));
    }
}
