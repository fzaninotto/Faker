<?php

namespace Faker\Test\Provider\en_CA;

use Faker\Generator;
use Faker\Provider\en_CA\PhoneNumber;

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

    public function testPhoneNumberCanReturnData()
    {
      $number = $this->faker->phoneNumber;
      $this->assertNotEmpty($number);
    }

    public function testPhoneNumberFormat()
    {
      $number = $this->faker->phoneNumber;
      $this->assertRegExp('/^((([0-9]{1})*[- .(]*([0-9]{3})[- .)]*[0-9]{3}[- .]*[0-9]{4})+)*$/', $number);
    }

    public function testPhoneNumber()
    {
      for ($i = 0; $i < 100; $i++) {
          $number = $this->faker->phoneNumber;
          $baseNumber = preg_replace('/ *x.*$/', '', $number); // Remove possible extension
          $digits = array_values(array_filter(str_split($baseNumber), 'ctype_digit'));

          // Prefix '1' allowed
          if (count($digits) === 11) {
              $this->assertEquals('1', $digits[0]);
              $digits = array_slice($digits, 1);
          }

          // 10 digits
          $this->assertEquals(10, count($digits));

          // Last two digits of exchange code cannot be 1
          if ($digits[4] === 1) {
              $this->assertNotEquals($digits[4], $digits[5]);
          }
      }
    }
}
