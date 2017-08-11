<?php

namespace Faker\Provider\ms_MY;

use Faker\Generator;
use Faker\Provider\ms_MY\Payment;

class PaymentTest extends \PHPUnit_Framework_TestCase
{

  /**
   * @var Faker\Generator
   */
  private $faker;

  /**
   * @group ms_MY
   */
  public function setUp()
  {
    $faker = new Generator();
    $faker->addProvider(new Payment($faker));
    $this->faker = $faker;
  }

  /**
   * @group  ms_MY
   * Test the validity of Bank Name
   */
  public function testBank()
  {
    $bank = $this->faker->bank;
    $this->assertNotEmpty($bank);
    $this->assertInternalType('string', $bank);
    $this->assertRegExp('/[A-Z][a-z]+/', $bank);
  }

}

?>