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

    public function testMobileNumber06()
    {
        do {
            $mobile = $this->faker->mobileNumber();
        } while (' ' == $mobile[2] || '06' != substr($mobile, 0, 2));
        $this->assertRegExp('/^06(?:\d{2}){4}$/', $mobile);
    }

    public function testMobileNumber06WithSeparator()
    {
        $i = 0;
        while (10 > $i) {
            do {
                $mobile = $this->faker->mobileNumber();
            } while ('+33 6' != substr($mobile, 0, 5) && '06 ' != substr($mobile, 0, 3));
            $this->assertRegExp('/^(?:(?:\+33 (?:\(0\))?)|0)6(?: \d{2}){4}$/', $mobile);
            $i++;
        }
    }

    public function testMobileNumber07()
    {
        do {
            $mobile = $this->faker->mobileNumber();
        } while (' ' == $mobile[2] || '07' != substr($mobile, 0, 2));
        $this->assertRegExp('/^07(?:3|4|5|6|7|8|9)\d(?:\d{2}){3}$/', $mobile);
    }

    public function testMobileNumber07WithSeparator()
    {
        $i = 0;
        while (10 > $i) {
            do {
                $mobile = $this->faker->mobileNumber();
            } while ('+33 7' != substr($mobile, 0, 5));
            $this->assertRegExp('/^(?:(?:\+33 (?:\(0\))?)|0)7 (?:3|4|5|6|7|8|9)\d(?: \d{2}){3}$/', $mobile);
            $i++;
        }
    }
}
