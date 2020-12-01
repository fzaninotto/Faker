<?php

namespace Faker\Test\Provider\ro_RO;

use Faker\Generator;
use Faker\Provider\DateTime;
use Faker\Provider\ro_RO\Person;
use Faker\Test\TestCase;

final class PersonTest extends TestCase
{
    public const TEST_CNP_REGEX = '/^[1-9][0-9]{2}(?:0[1-9]|1[012])(?:0[1-9]|[12][0-9]|3[01])(?:0[1-9]|[123][0-9]|4[0-6]|5[12])[0-9]{3}[0-9]$/';

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new DateTime($faker));
        $faker->addProvider(new Person($faker));
        $faker->setDefaultTimezone('Europe/Bucharest');
        $this->faker = $faker;
    }

    protected function tearDown(): void
    {
        $this->faker->setDefaultTimezone();
    }

    public function invalidGenderProvider()
    {
        return [
            ['elf'],
            ['ent'],
            ['fmle'],
            ['mal'],
        ];
    }

    public function invalidYearProvider()
    {
        return [
            [1652],
            [1799],
            [2100],
            [2252],
        ];
    }

    public function validYearProvider()
    {
        return [
            [null],
            [''],
            [1800],
            [1850],
            [1900],
            [1990],
            [2000],
            [2099],
        ];
    }

    public function validCountyCodeProvider()
    {
        return [
            ['AB'], ['AR'], ['AG'], ['B'], ['BC'], ['BH'], ['BN'], ['BT'],
            ['BV'], ['BR'], ['BZ'], ['CS'], ['CL'], ['CJ'], ['CT'], ['CV'],
            ['DB'], ['DJ'], ['GL'], ['GR'], ['GJ'], ['HR'], ['HD'], ['IL'],
            ['IS'], ['IF'], ['MM'], ['MH'], ['MS'], ['NT'], ['OT'], ['PH'],
            ['SM'], ['SJ'], ['SB'], ['SV'], ['TR'], ['TM'], ['TL'], ['VS'],
            ['VL'], ['VN'], ['B1'], ['B2'], ['B3'], ['B4'], ['B5'], ['B6']
        ];
    }

    public function invalidCountyCodeProvider()
    {
        return [
            ['JK'], ['REW'], ['x'], ['FF'], ['aaaddadaada']
        ];
    }

    public function validInputDataProvider()
    {
        return [
            [Person::GENDER_MALE, '1981-06-16','B2', true, '181061642'],
            [Person::GENDER_FEMALE, '1981-06-16','B2', true, '281061642'],
            [Person::GENDER_MALE, '1981-06-16','B2', false, '981061642'],
            [Person::GENDER_FEMALE, '1981-06-16','B2', false, '981061642'],
        ];
    }
    /**
     *
     */
    public function test_allRandom_returnsValidCnp()
    {
        $cnp = $this->faker->cnp;
        $this->assertTrue(
            $this->isValidCnp($cnp),
            sprintf("Invalid CNP '%' generated", $cnp)
        );
    }

    /**
     *
     */
    public function test_validGender_returnsValidCnp()
    {
        $cnp = $this->faker->cnp(Person::GENDER_MALE);
        $this->assertTrue(
            $this->isValidMaleCnp($cnp),
            sprintf("Invalid CNP '%' generated for '%s' gender", $cnp, Person::GENDER_MALE)
        );

        $cnp = $this->faker->cnp(Person::GENDER_FEMALE);
        $this->assertTrue(
            $this->isValidFemaleCnp($cnp),
            sprintf("Invalid CNP '%' generated for '%s' gender", $cnp, Person::GENDER_FEMALE)
        );
    }

    /**
     * @param string $value
     *
     * @dataProvider invalidGenderProvider
     */
    public function test_invalidGender_throwsException($value)
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->cnp($value);
    }

    /**
     * @param string $value year of birth
     *
     * @dataProvider validYearProvider
     */
    public function test_validYear_returnsValidCnp($value)
    {
        $cnp = $this->faker->cnp(null, $value);
        $this->assertTrue(
            $this->isValidCnp($cnp),
            sprintf("Invalid CNP '%' generated for valid year '%s'", $cnp, $value)
        );
    }

    /**
     * @param string $value year of birth
     *
     * @dataProvider invalidYearProvider
     */
    public function test_invalidYear_throwsException($value)
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->cnp(null, $value);
    }

    /**
     * @param $value
     * @dataProvider validCountyCodeProvider
     */
    public function test_validCountyCode_returnsValidCnp($value)
    {
        $cnp = $this->faker->cnp(null, null, $value);
        $this->assertTrue(
            $this->isValidCnp($cnp),
            sprintf("Invalid CNP '%' generated for valid year '%s'", $cnp, $value)
        );
    }

    /**
     * @param $value
     * @dataProvider invalidCountyCodeProvider
     */
    public function test_invalidCountyCode_throwsException($value)
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->cnp(null, null, $value);
    }

    /**
     *
     */
    public function test_nonResident_returnsValidCnp()
    {
        $cnp = $this->faker->cnp(null, null, null, false);
        $this->assertTrue(
            $this->isValidCnp($cnp),
            sprintf("Invalid CNP '%' generated for non resident", $cnp)
        );
        $this->assertStringStartsWith(
            '9',
            $cnp,
            sprintf("Invalid CNP '%' generated for non resident (should start with 9)", $cnp)
        );
    }

    /**
     * @param $gender
     * @param $dateOfBirth
     * @param $county
     * @param $isResident
     * @param $expectedCnpStart
     *
     * @dataProvider validInputDataProvider
     */
    public function test_validInputData_returnsValidCnp($gender, $dateOfBirth, $county, $isResident, $expectedCnpStart)
    {
        $cnp = $this->faker->cnp($gender, $dateOfBirth, $county, $isResident);
        $this->assertStringStartsWith(
            $expectedCnpStart,
            $cnp,
            sprintf("Invalid CNP '%' generated for non valid data", $cnp)
        );
    }


    protected function isValidFemaleCnp($value)
    {
        return $this->isValidCnp($value) && in_array($value[0], [2, 4, 6, 8, 9]);
    }

    protected function isValidMaleCnp($value)
    {
        return $this->isValidCnp($value) && in_array($value[0], [1, 3, 5, 7, 9]);
    }

    protected function isValidCnp($cnp)
    {
        if (preg_match(static::TEST_CNP_REGEX, $cnp) !== false) {
            $checkNumber = 279146358279;

            $checksum = 0;
            foreach (range(0, 11) as $digit) {
                $checksum += (int) substr($cnp, $digit, 1) * (int) substr($checkNumber, $digit, 1);
            }
            $checksum %= 11;
            $checksum = $checksum == 10 ? 1 : $checksum;

            if ($checksum == substr($cnp, -1)) {
                return true;
            }
        }

        return false;
    }
}
