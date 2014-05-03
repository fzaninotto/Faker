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
            array(1, '950910-0799'),
            array(2, '950214-8993'),
            array(3, '900107-9715'),
            array(4, '710730-9515'),
            array(5, '040503-0115')
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

        $this->assertEquals('950910-0799', $faker->personalIdentityNumber('male'));
    }

    public function testUsesEvenValuesForFemales()
    {
        $faker = $this->faker;
        $faker->seed(1);

        $this->assertEquals('950910-0781', $faker->personalIdentityNumber('female'));

    }
}
