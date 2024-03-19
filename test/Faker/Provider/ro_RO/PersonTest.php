<?php

namespace Faker\Test\Provider\ro_RO;

use Faker\Generator;
use Faker\Provider\DateTime;
use Faker\Provider\Person as PersonAlias;
use Faker\Provider\ro_RO\Person;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    public const TEST_CNP_REGEX = '/^[1-9][0-9]{2}(?:0[1-9]|1[012])(?:0[1-9]|[12][0-9]|3[01])(?:0[1-9]|[123][0-9]|4[0-6]|5[12])[0-9]{3}[0-9]$/';

    protected Generator $faker;

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

    public static function invalidGenderProvider(): array
    {
        return [
            ['elf'],
            ['ent'],
            ['fmle'],
            ['mal'],
        ];
    }

    public static function invalidYearProvider(): array
    {
        return [
            [1652],
            [1799],
            [2100],
            [2252],
        ];
    }

    public static function validYearProvider(): array
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

    public static function validCountyCodeProvider(): array
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

    public static function invalidCountyCodeProvider(): array
    {
        return [
            ['JK'], ['REW'], ['x'], ['FF'], ['aaaddadaada'],
        ];
    }

    public static function validInputDataProvider(): array
    {
        return [
            [PersonAlias::GENDER_MALE, '1981-06-16', 'B2', true, '181061642'],
            [PersonAlias::GENDER_FEMALE, '1981-06-16', 'B2', true, '281061642'],
            [PersonAlias::GENDER_MALE, '1981-06-16', 'B2', false, '981061642'],
            [PersonAlias::GENDER_FEMALE, '1981-06-16', 'B2', false, '981061642'],
        ];
    }

    public function testAllRandomReturnsValidCnp(): void
    {
        $cnp = $this->faker->cnp;
        $this->assertTrue(
            $this->isValidCnp($cnp),
            \sprintf("Invalid CNP '%' generated", $cnp)
        );
    }

    public function testValidGenderReturnsValidCnp(): void
    {
        $cnp = $this->faker->cnp(PersonAlias::GENDER_MALE);
        $this->assertTrue(
            $this->isValidMaleCnp($cnp),
            \sprintf("Invalid CNP '%' generated for '%s' gender", $cnp, PersonAlias::GENDER_MALE)
        );

        $cnp = $this->faker->cnp(PersonAlias::GENDER_FEMALE);
        $this->assertTrue(
            $this->isValidFemaleCnp($cnp),
            \sprintf("Invalid CNP '%' generated for '%s' gender", $cnp, PersonAlias::GENDER_FEMALE)
        );
    }

    #[DataProvider('invalidGenderProvider')]
    public function testInvalidGenderThrowsException(mixed $value): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->cnp($value);
    }

    #[DataProvider('validYearProvider')]
    public function testValidYearReturnsValidCnp(mixed $value): void
    {
        $cnp = $this->faker->cnp(null, $value);
        $this->assertTrue(
            $this->isValidCnp($cnp),
            \sprintf("Invalid CNP '%' generated for valid year '%s'", $cnp, $value)
        );
    }

    #[DataProvider('invalidYearProvider')]
    public function testInvalidYearThrowsException(mixed $value): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->cnp(null, $value);
    }

    #[DataProvider('validCountyCodeProvider')]
    public function testValidCountyCodeReturnsValidCnp($value): void
    {
        $cnp = $this->faker->cnp(null, null, $value);
        $this->assertTrue(
            $this->isValidCnp($cnp),
            \sprintf("Invalid CNP '%' generated for valid year '%s'", $cnp, $value)
        );
    }

    #[DataProvider('invalidCountyCodeProvider')]
    public function testInvalidCountyCodeThrowsException($value): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->cnp(null, null, $value);
    }

    public function testNonResidentReturnsValidCnp(): void
    {
        $cnp = $this->faker->cnp(null, null, null, false);
        $this->assertTrue(
            $this->isValidCnp($cnp),
            \sprintf("Invalid CNP '%' generated for non resident", $cnp)
        );
        $this->assertStringStartsWith(
            '9',
            $cnp,
            \sprintf("Invalid CNP '%' generated for non resident (should start with 9)", $cnp)
        );
    }

    #[DataProvider('validInputDataProvider')]
    public function testValidInputDataReturnsValidCnp($gender, $dateOfBirth, $county, $isResident, $expectedCnpStart): void
    {
        $cnp = $this->faker->cnp($gender, $dateOfBirth, $county, $isResident);
        $this->assertStringStartsWith(
            $expectedCnpStart,
            $cnp,
            \sprintf("Invalid CNP '%' generated for non valid data", $cnp)
        );
    }

    protected function isValidFemaleCnp($value): bool
    {
        return $this->isValidCnp($value) && \in_array($value[0], [2, 4, 6, 8, 9]);
    }

    protected function isValidMaleCnp($value): bool
    {
        return $this->isValidCnp($value) && \in_array($value[0], [1, 3, 5, 7, 9]);
    }

    protected function isValidCnp($cnp): bool
    {
        if (false !== \preg_match(self::TEST_CNP_REGEX, $cnp)) {
            $checkNumber = 279146358279;

            $checksum = 0;
            foreach (\range(0, 11) as $digit) {
                $checksum += (int) \substr($cnp, $digit, 1) * (int) \substr($checkNumber, $digit, 1);
            }
            $checksum %= 11;
            $checksum = 10 === $checksum ? 1 : $checksum;

            if ($checksum === (int) \substr($cnp, -1)) {
                return true;
            }
        }

        return false;
    }
}
