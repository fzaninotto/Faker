<?php

namespace Faker\Provider\en_KE;

use Faker\Generator;
use Faker\Provider\en_KE\PhoneNumber;
use PHPUnit\Framework\TestCase;

class PhoneNumberTest extends TestCase
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

  public function testPhoneNumber()
  {
    $phone = $this->faker->PhoneNumber();
    $this->assertNotEmpty($phone);
    $this->assertInternalType('string', $phone);
    $this->assertRegexp('/^(?:254|\+254|0)?(7(?:(?:[0-9][0-9])|(?:5[0-6])|([0-9][5-9]))[0-9]{6})$/',$phone);
  }
}
