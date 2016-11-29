<?php
namespace Faker\Test\Provider\kk_KZ;

use Faker\Generator;
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
        $birthDate                      = new \DateTime('now');
        $individualIdentificationNumber = $this->faker->individualIdentificationNumber($birthDate);
        $birthDateAsString              = $birthDate->format('ymd');

        $this->assertRegExp(
            "/^(" . $birthDateAsString . ")([1-6]{1})(\\d{5})$/",
            $individualIdentificationNumber
        );
    }
}
