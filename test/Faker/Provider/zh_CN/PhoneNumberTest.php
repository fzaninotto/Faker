<?php

namespace Faker\Test\Provider\zh_CN;

use Faker\Generator;
use Faker\Provider\zh_CN\PhoneNumber;
use PHPUnit\Framework\TestCase;

final class PhoneNumberTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected static $purePhoneNumberInCNRegExp = '/^(\+?0?86\-?)?1[345789]\d{9}$/';

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testPhoneNumber()
    {
        for ($i = 0; $i < 100; $i++) {
            $number = $this->faker->phoneNumber;
            $digits = array_values(array_filter(str_split($number), 'ctype_digit'));
            // Prefix 1
            if (count($digits) === 11) {
                $this->assertEquals('1', $digits[0]);
            }
            // 11 digits
            $this->assertCount(11, $digits);
            // Test format
            $this->assertRegExp('/^1[345789]\d{9}$/', $number);
        }
    }

    public function testTollFreePhoneNumber()
    {
        for ($i = 0; $i < 100; $i++) {
            $number = $this->faker->tollFreePhoneNumber;
            $digits = array_values(array_filter(str_split($number), 'ctype_digit'));

            // Prefix '4'
            $this->assertEquals('4', $digits[0]);
            $this->assertContains($digits[3], array(0, 1, 6, 7, 8, 9));

            // 10 digits
            $this->assertCount(10, $digits);

            // Test format
            $this->assertRegExp('/^400-[016789]\d{2}-\d{4}$/', $number);
        }
    }

    public function testE164PhoneNumber()
    {
        for ($i = 0; $i < 100; $i++) {
            $e164PhoneNumber = $this->faker->e164PhoneNumber;
            $this->assertEquals('+86', substr($e164PhoneNumber, 0, 3));
            $pureNumber = substr($e164PhoneNumber, 3);
            $digits = array_values(array_filter(str_split($pureNumber), 'ctype_digit'));
            // Prefix 1
            if (count($digits) === 11) {
                $this->assertEquals('1', $digits[0]);
            }
            // 11 digits
            $this->assertCount(11, $digits);
            // Test format
            $this->assertRegExp('/^(\+?0?86\-?)1[345789]\d{9}$/', $e164PhoneNumber);
        }
    }
}
