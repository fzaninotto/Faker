<?php

namespace Faker\Test\Provider\fi_FI;

use Faker\Generator;
use Faker\Provider\fi_FI\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    /** @var Generator */
    protected $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testGeneratedNumbersValidity() {
        $someNums = array();
        for ($i = 0; $i < 20; $i++) {
            $faker = $this->faker;
            $someNums[] = array('num' => $faker->safePersonalIdentityNumber(), 'type' => 'safe');
            $someNums[] = array('num' => $faker->personalIdentityNumber(), 'type' => 'any');
            $someNums[] = array('num' => $faker->personalIdentityNumber(null, null, rand(0,20), rand(60,80)), 'type' => 'any');
            $someNums[] = array('num' => $faker->personalIdentityNumber(null, rand(0,1) ? 'male' : 'female', rand(0,20), rand(60,80)), 'type' => 'any');
        }
        foreach ($someNums as $num) {
            $this->assertStringMatchesFormat('%d%d%d%d%d%d%c%d%d%d%c', $num['num']);
            $this->assertEquals(1, preg_match('/^(\d{6})([A\-])(\d{3})([0123456789ABCDEFHJKLMNPRSTUVWXY])$/', $num['num'], $matches));
            $bday = $matches[1];
            $delimiter = $matches[2];
            $idPart = $matches[3];
            //$checksum = $matches[4];
            $this->assertInstanceOf('DateTime', $dt = \DateTime::createFromFormat('dmy', $bday));
            if ($dt->format('y') < date('y')) $this->assertEquals('A', $delimiter);
            if ($num['type'] == 'safe') $this->assertGreaterThan(899, $idPart);
        }
    }

}
