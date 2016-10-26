<?php

namespace Faker\Test\Provider\en_ZA;

use Faker\Generator;
use Faker\Provider\en_ZA\PhoneNumber;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testPhoneNumber()
    {
        for ($i = 0; $i < 5; $i++) {
            $number = $this->faker->phoneNumber;

            $digits = array_values(array_filter(str_split($number), 'ctype_digit'));

            $this->assertEquals(10, count($digits));
            $this->assertEquals('0', $digits[0]);
        }
    }

    public function testTollFreePhoneNumber()
    {
        for ($i = 0; $i < 5; $i++) {
            $number = $this->faker->tollFreeNumber;
            $digits = array_values(array_filter(str_split($number), 'ctype_digit'));

            $areaCode = $digits[0] . $digits[1] . $digits[2] . $digits[3];

            $this->assertEquals('0', $digits[0]);
            $this->assertContains($areaCode, array('0800', '0860', '0861', '0862'));
        }
    }

    public function testCellPhoneNumber()
    {
        for ($i = 0; $i < 5; $i++) {
            $number = $this->faker->mobileNumber;
            $digits = array_values(array_filter(str_split($number), 'ctype_digit'));

            $this->assertEquals(10, count($digits));
            $this->assertRegExp('/^(\+27|27)?(\()?0?([6][0-4]|[7][1-9]|[8][1-9])(\))?( |-|\.|_)?(\d{3})( |-|\.|_)?(\d{4})/', $number);
        }
    }

    public function testUnformattedPhoneNumber()
    {
        for ($i = 0; $i < 5; $i++) {
            $number = $this->faker->phoneNumber(false);

            $digits = array_values(array_filter(str_split($number), 'ctype_digit'));

            $this->assertEquals(10, count($digits));
        }
    }

    public function testInternationalPhoneNumber()
    {
        for ($i = 0; $i < 5; $i++) {
            $number = $this->faker->phoneNumber(false, true);

            $digits = array_values(array_filter(str_split($number), 'ctype_digit'));

            $this->assertEquals(11, count($digits));
            $this->assertEquals('+27', substr($number, 0, 3));
        }
    }

    public function testUnformattedTollFreeNumber() {
        for ($i = 0; $i < 5; $i++) {
            $number = $this->faker->tollFreeNumber(false);
            $digits = array_values(array_filter(str_split($number), 'ctype_digit'));

            $areaCode = $digits[0] . $digits[1] . $digits[2] . $digits[3];
            $this->assertContains($areaCode, array('0800', '0860', '0861', '0862'));
            $this->assertEquals(0, preg_match('/[-()\s]/', $number));
        }
    }

    public function testUnformattedCellPhoneNumber() {
        for ($i = 0; $i < 5; $i++) {
            $number = $this->faker->mobileNumber(false);
            $digits = array_values(array_filter(str_split($number), 'ctype_digit'));

            $this->assertEquals(10, count($digits));
            $this->assertEquals(0, preg_match('/[-()\s]/', $number));
        }
    }

    public function testInternationalCellPhoneNumber() {
        for ($i = 0; $i < 5; $i++) {
            $number = $this->faker->mobileNumber(false, true);
            $digits = array_values(array_filter(str_split($number), 'ctype_digit'));

            $this->assertEquals(11, count($digits));
            $this->assertEquals('+27', substr($number, 0, 3));
            $this->assertEquals(0, preg_match('/[-()\s]/', $number));
        }
    }
}