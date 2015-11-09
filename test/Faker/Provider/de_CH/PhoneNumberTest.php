<?php

namespace Faker\Test\Provider\de_CH;

use Faker\Generator;
use Faker\Provider\de_CH\PhoneNumber;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Faker\Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    /**
     * @test
     * @dataProvider phoneNumberFormatProvider
     */
    public function phoneNumberFormat()
    {
        $number = $this->faker->phoneNumber;
        $this->assertRegExp('/^0\d{2} ?\d{3} ?\d{2} ?\d{2}|\+44 ?(\(0\))?\d{2} ?\d{3} ?\d{2} ?\d{2}$/', $number);
    }

    public function phoneNumberFormatProvider (){
        return array(array(), array(), array(), array(), array(), array(), array(), array(), array(), array());
    }
}
