<?php

namespace Faker\Test\Provider\ms_MY;

use Faker\Generator;
use Faker\Provider\ms_MY\PhoneNumber;

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

    /**
     * @group ms_MY
     */
    public function testPhoneNumberFormat()
    {
        $number = $this->faker->phoneNumber;
        $this->assertNotEmpty($number);
    }

    /**
     * @group ms_MY
     */
    public function testMobileNumberFormat()
    {
        $number = $this->faker->mobileNumber;
        $this->assertNotEmpty($number);
    }

    /**
     * @group ms_MY
     */
    public function testAreaCode(){

        $areaCode = $this->faker->areaCode;
        $this->assertNotEmpty($areaCode);
    }

    /**
     * @group ms_MY
     */
    public function testMobileCode(){

        $mobileOperatorCode = $this->faker->mobileOperatorCode;
        $this->assertNotEmpty($mobileOperatorCode);
    }

}
