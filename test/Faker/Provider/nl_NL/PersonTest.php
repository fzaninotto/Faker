<?php

namespace Faker\Test\Provider\nl_NL;

use Faker\Generator;
use Faker\Provider\nl_NL\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testGenerateValidIdNumber()
    {
        $bsn = $this->faker->BSN();
        $this->assertEquals(9, strlen( $bsn ) );

        $bsn = (string)$bsn;
        $sum = 0;
        for( $i=0; $i < 8; $i++ ) {
            $sum += $bsn[ $i ] * (9 - $i);
        }
        $this->assertTrue($sum != 0 && $bsn[8] == $sum % 11);
    }
}
