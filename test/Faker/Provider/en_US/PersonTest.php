<?php

namespace Faker\Test\Provider\en_US;

use Faker\Generator;
use Faker\Provider\en_US\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testSsnReturnsValidSsn()
    {
        $ssn = $this->faker->ssn();
        $this->assertRegExp("/(?!000)(?!666)(?!9)[0-9]{3}(?!00)[0-9]{2}(?!0000)[0-9]{4}/", (string)$ssn);
        $this->assertEquals(9, strlen($ssn));
    }

    public function testSsnDashedReturnsValidDashedSsn()
    {
        $ssn = $this->faker->ssn(true);

        // Assert it is ###-##-####
        $this->assertRegExp("/^[\d]{3}-[\d]{2}-[\d]{4}/", $ssn);    
        $this->assertEquals(11, strlen($ssn));

        // Assert SSN number matches rules
        $this->assertRegExp("/(?!000)(?!666)(?!9)[0-9]{3}-(?!00)[0-9]{2}-(?!0000)[0-9]{4}/", $ssn);
    }
}
