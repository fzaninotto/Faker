<?php

namespace Faker\Test\Provider\he_IL;

use Faker\Generator;
use Faker\Provider\he_IL\Person;
use Faker\Provider\he_IL\Internet;
use Faker\Provider\he_IL\Company;

class InternetTest extends \PHPUnit_Framework_TestCase
{

  /**
   *  @var Faker\Generator
   */

   public function setUp()
   {
     $faker = new Generator();
     $faker->addProvider(new Person($faker));
     $faker->addProvider(new Internet($faker));
     $faker->addProvider(new Company($faker));
     $this->faker = $faker;
   }

   /**
    * @test
    */

    public function emailIsValid()
    {
      $email = $this->faker->unique()->safeEmail;
      $this->assertNotFalse(filter_var($email, FILTER_VALIDATE_EMAIL));
    }

}

?>
