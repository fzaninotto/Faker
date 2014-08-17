<?php

namespace Faker\Test\Provider\sv_SE;

use Faker\Generator;
use Faker\Provider\sv_SE\Person;

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
            array(1, '720727-0070'),
            array(2, '710414-8205'),
            array(3, '591012-9245'),
            array(4, '180307-9001'),
            array(5, '820904-0552')
        );
    }

    /**
     * @dataProvider provideSeedAndExpectedReturn
     */
    public function testPersonalIdentityNumber($seed, $expected)
    {
        $faker = $this->faker;
        $faker->seed($seed);

        $this->assertEquals($expected, $faker->personalIdentityNumber());
    }

    public function testUsesOddValuesForMales()
    {
        $faker = $this->faker;
        $faker->seed(1);

        $this->assertEquals('720727-0070', $faker->personalIdentityNumber('male'));
    }

    public function testUsesEvenValuesForFemales()
    {
        $faker = $this->faker;
        $faker->seed(1);

        $this->assertEquals('720727-0062', $faker->personalIdentityNumber('female'));

    }
}
