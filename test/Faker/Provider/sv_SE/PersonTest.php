<?php

namespace Faker\Test\Provider\sv_SE;

use Faker\Calculator\Luhn;
use Faker\Generator;
use Faker\Provider\sv_SE\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    /** @var Generator */
    protected $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function provideSeedAndExpectedReturn()
    {
        return array(
            array(1, '720727', '720727-9915'),
            array(2, '710414', '710414-9914'),
            array(3, '591012', '591012-9898'),
            array(4, '180307', '180307-9803'),
            array(5, '820904', '820904-9959')
        );
    }

    /**
     * @dataProvider provideSeedAndExpectedReturn
     */
    public function testPersonalIdentityNumberUsesBirthDateIfProvided($seed, $birthdate, $expected)
    {
        $faker = $this->faker;
        $faker->seed($seed);
        $pin = $faker->personalIdentityNumber(\DateTime::createFromFormat('ymd', $birthdate));
        $this->assertEquals($expected, $pin);
    }

    public function testPersonalIdentityNumberGeneratesLuhnCompliantNumbers()
    {
        $pin = str_replace('-', '', $this->faker->personalIdentityNumber());
        $this->assertTrue(Luhn::isValid($pin));
    }

    public function testPersonalIdentityNumberGeneratesOddValuesForMales()
    {
        $pin = $this->faker->personalIdentityNumber(null, 'male');
        $this->assertEquals(1, $pin[9] % 2);
    }

    public function testPersonalIdentityNumberGeneratesEvenValuesForFemales()
    {
        $pin = $this->faker->personalIdentityNumber(null, 'female');
        $this->assertEquals(0, $pin[9] % 2);
    }
}
