<?php

namespace Faker\Test\Provider\ro_RO;

use Faker\Provider\DateTime;
use Faker\Provider\ro_RO\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public const TEST_CNP_REGEX = '/^[1-9][0-9]{2}(?:0[1-9]|1[012])(?:0[1-9]|[12][0-9]|3[01])(?:0[1-9]|[123][0-9]|4[0-6]|5[12])[0-9]{3}[0-9]$/';

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
            ['VL'], ['VN'], ['B1'], ['B2'], ['B3'], ['B4'], ['B5'], ['B6'],
        ];
    }

    public function invalidCountyCodeProvider()
    {
        return [
            ['JK'], ['REW'], ['x'], ['FF'], ['aaaddadaada'],
        ];
    }

    public function validInputDataProvider()
    {
        return [
            [Person::GENDER_MALE, '1981-06-16', 'B2', true, '181061642'],
            [Person::GENDER_FEMALE, '1981-06-16', 'B2', true, '281061642'],
            [Person::GENDER_MALE, '1981-06-16', 'B2', false, '981061642'],
            [Person::GENDER_FEMALE, '1981-06-16', 'B2', false, '981061642'],
        ];
    }

    public function testAllRandomReturnsValidCnp(): void
    {
        $cnp = $this->faker->cnp;
        self::assertTrue(
            $this->isValidCnp($cnp),
            sprintf("Invalid CNP '%' generated", $cnp),
        );
    }

    public function testValidGenderReturnsValidCnp(): void
    {
        $cnp = $this->faker->cnp(Person::GENDER_MALE);
        self::assertTrue(
            $this->isValidMaleCnp($cnp),
            sprintf("Invalid CNP '%' generated for '%s' gender", $cnp, Person::GENDER_MALE),
        );

        $cnp = $this->faker->cnp(Person::GENDER_FEMALE);
        self::assertTrue(
            $this->isValidFemaleCnp($cnp),
            sprintf("Invalid CNP '%' generated for '%s' gender", $cnp, Person::GENDER_FEMALE),
        );
    }

    /**
     * @param string $value
     *
     * @dataProvider invalidGenderProvider
     */
    public function testInvalidGenderThrowsException($value): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->cnp($value);
    }

    /**
     * @param string $value year of birth
     *
     * @dataProvider validYearProvider
     */
    public function testValidYearReturnsValidCnp($value): void
    {
        $cnp = $this->faker->cnp(null, $value);
        self::assertTrue(
            $this->isValidCnp($cnp),
            sprintf("Invalid CNP '%' generated for valid year '%s'", $cnp, $value),
        );
    }

    /**
     * @param string $value year of birth
     *
     * @dataProvider invalidYearProvider
     */
    public function testInvalidYearThrowsException($value): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->cnp(null, $value);
    }

    /**
     * @param string $value
     *
     * @dataProvider validCountyCodeProvider
     */
    public function testValidCountyCodeReturnsValidCnp($value): void
    {
        $cnp = $this->faker->cnp(null, null, $value);
        self::assertTrue(
            $this->isValidCnp($cnp),
            sprintf("Invalid CNP '%' generated for valid year '%s'", $cnp, $value),
        );
    }

    /**
     * @param string $value
     *
     * @dataProvider invalidCountyCodeProvider
     */
    public function testInvalidCountyCodeThrowsException($value): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->cnp(null, null, $value);
    }

    public function testNonResidentReturnsValidCnp(): void
    {
        $cnp = $this->faker->cnp(null, null, null, false);
        self::assertTrue(
            $this->isValidCnp($cnp),
            sprintf("Invalid CNP '%' generated for non resident", $cnp),
        );
        self::assertStringStartsWith(
            '9',
            $cnp,
            sprintf("Invalid CNP '%' generated for non resident (should start with 9)", $cnp),
        );
    }

    /**
     * @param string $gender
     * @param string $dateOfBirth
     * @param string $county
     * @param bool   $isResident
     * @param string $expectedCnpStart
     *
     * @dataProvider validInputDataProvider
     */
    public function testValidInputDataReturnsValidCnp($gender, $dateOfBirth, $county, $isResident, $expectedCnpStart): void
    {
        $cnp = $this->faker->cnp($gender, $dateOfBirth, $county, $isResident);
        self::assertStringStartsWith(
            $expectedCnpStart,
            $cnp,
            sprintf("Invalid CNP '%' generated for non valid data", $cnp),
        );
    }

    protected function isValidFemaleCnp($value)
    {
        return $this->isValidCnp($value) && in_array($value[0], [2, 4, 6, 8, 9], false);
    }

    protected function isValidMaleCnp($value)
    {
        return $this->isValidCnp($value) && in_array($value[0], [1, 3, 5, 7, 9], false);
    }

    protected function isValidCnp($cnp)
    {
        if (preg_match(self::TEST_CNP_REGEX, $cnp) !== false) {
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

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);

        yield new DateTime($this->faker);
    }
}
