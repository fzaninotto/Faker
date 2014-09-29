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

    public function provideSeedAndExpectedReturn()
    {
        return array(
            array(1, '24021987', '240287-657R', '240287-957D'),
            array(2, '02071935', '020735-1560', '020735-956T'),
            array(3, '17111997', '171197-4457', '171197-945B'),
            array(4, '12092001', '120901A8035', '120901A903C'),
            array(5, '30041968', '300468-577R', '300468-977M')
        );
    }

    /**
     * @dataProvider provideSeedAndExpectedReturn
     */
    public function testPersonalIdentityNumber($seed, $birthdate, $expected, $notUsed)
    {
        $faker = $this->faker;
        $faker->seed($seed);
        $this->assertEquals(
            $expected,
            $faker->personalIdentityNumber(\DateTime::createFromFormat('dmY', $birthdate))
        );
    }

    /**
     * @dataProvider provideSeedAndExpectedReturn
     */
    public function testSafePersonalIdentityNumber($seed, $birthdate, $notUsed, $expected) {
        $faker = $this->faker;
        $faker->seed($seed);
        $this->assertEquals(
            $expected,
            $faker->safePersonalIdentityNumber(\DateTime::createFromFormat('dmY', $birthdate))
        );

    }

    public function testUsesOddValuesForMales()
    {
        $faker = $this->faker;
        $faker->seed(1);

        $this->assertEquals(
            '280377-571S',
            $faker->personalIdentityNumber(\DateTime::createFromFormat('dmY', '28031977'), Person::GENDER_MALE)
        );
    }

    public function testUsesEvenValuesForFemales()
    {
        $faker = $this->faker;
        $faker->seed(2);

        $this->assertEquals(
            '150200A568L',
            $faker->personalIdentityNumber(\DateTime::createFromFormat('dmY', '15022000'), Person::GENDER_FEMALE)
        );
    }

    public function testGeneratedNumbersValidity() {
        $someNums = array();
        for ($i = 0; $i < 20; $i++) {
            $faker = $this->faker;
            $someNums[] = array('num' => $faker->safePersonalIdentityNumber(), 'type' => 'safe');
            $someNums[] = array('num' => $faker->personalIdentityNumber(), 'type' => 'any');
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
