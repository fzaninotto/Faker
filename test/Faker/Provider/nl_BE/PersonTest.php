<?php

namespace Faker\Test\Provider\nl_BE;

use Faker\Generator;
use Faker\Provider\nl_BE\Person;
use PHPUnit\Framework\TestCase;
use Datetime;

class PersonTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testRrnIsValid()
    {
        $rrn = $this->faker->rrn('f');
        
        $this->assertEquals(11, strlen($rrn));

        $dob = DateTime::createFromFormat('ymd', substr($rrn, 0, 6));
        $this->assertLessThanOrEqual(new Datetime(), $dob);

        if((int) $dob->format('Y') >= 2000)
        {
            $calc = 97 - ((2 . substr($rrn, 0, 9)) % 97);
        }
        else
        {
            $calc = 97 - (substr($rrn, 0, 9) % 97);
        }
        $controle = substr($rrn, 9, 2);
        $this->assertEquals($calc, $controle);

        $middle = substr($rrn, 6, 3);
        $this->assertGreaterThan(1, $middle);
        $this->assertLessThan(991, $middle);
    }

    public function testRrnIsMale()
    {
        $rrn = $this->faker->rrn('male');
        $this->assertEquals(substr($rrn, 6, 3) % 2, 1);
    }

    public function testRrnIsFemale()
    {
        $rrn = $this->faker->rrn('female');
        $this->assertEquals(substr($rrn, 6, 3) % 2, 0);
    }
}
