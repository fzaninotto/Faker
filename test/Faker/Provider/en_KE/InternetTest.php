<?php

namespace Faker\Provider\en_KE;

use Faker\Generator;
use Faker\Provider\en_KE\Internet;
use PHPUnit\Framework\TestCase;

class InternetTest extends TestCase
{

  /**
   * @var Faker\Generator
   */
  private $faker;

  public function setUp()
  {
    $faker = new Generator();
    $faker->addProvider(new Internet($faker));
    $this->faker = $faker;
  }

  public function testTld()
  {
    $tld = $this->faker->tld();
    $this->assertNotEmpty($tld);
    $this->assertInternalType('string', $tld);
    $this->assertRegExp('/\w+(\.\w+)*$/', $tld);
  }
}