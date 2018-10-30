<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Generator;
use Faker\Provider\fr_FR\PhoneNumber;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testMobileNumber()
    {
        $mobileNumber = $this->faker->mobileNumber();
        $this->assertRegExp('/^(\+33 |\+33 \(0\)|0)(6|7)(?:(\s{1})?\d{2}){4}$/', $mobileNumber);
    }

    public function testMobileNumber07Format()
    {
        $mobileNumberFormat = $this->faker->phoneNumber07();
        $this->assertRegExp('/^([3-9]{1})\d(\d{2}){3}$/', $mobileNumberFormat);
    }

    public function testMobileNumber07WithSeparatorFormat()
    {
        $mobileNumberFormat = $this->faker->phoneNumber07WithSeparator();
        $this->assertRegExp('/^([3-9]{1})\d( \d{2}){3}$/', $mobileNumberFormat);
    }

    public function testServiceNumber()
    {
        $serviceNumber = $this->faker->serviceNumber();
        $this->assertRegExp('/^(\+33 |\+33 \(0\)|0)8(?:(\s{1})?\d{2}){4}$/', $serviceNumber);
    }
    
    public function testServiceNumberFormat()
    {
        $serviceNumberFormat = $this->faker->phoneNumber08();
        $this->assertRegExp('/^((0|1|2)\d{1}|9[^46])\d{6}$/', $serviceNumberFormat);
    }

    public function testServiceNumberWithSeparatorFormat()
    {
        $serviceNumberFormat = $this->faker->phoneNumber08WithSeparator();
        $this->assertRegExp('/^((0|1|2)\d{1}|9[^46])( \d{2}){3}$/', $serviceNumberFormat);
    }
}
