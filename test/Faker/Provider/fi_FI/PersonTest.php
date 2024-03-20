<?php

namespace Faker\Test\Provider\fi_FI;

use Faker\Generator;
use Faker\Provider\DateTime;
use Faker\Provider\fi_FI\Person;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    protected Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new DateTime($faker));
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public static function provideSeedAndExpectedReturn(): array
    {
        return [
            [1, '1800-01-01', '010100+5207'],
            [2, '1930-08-08', '080830-508R'],
            [3, '1999-12-31', '311299-409D'],
            [4, '2000-01-01', '010100A039P'],
            [5, '2015-06-17', '170615A690X'],
        ];
    }

    #[DataProvider('provideSeedAndExpectedReturn')]
    public function testPersonalIdentityNumberUsesBirthDateIfProvided($seed, $birthdate, $expected): void
    {
        $faker = $this->faker;
        $faker->seed($seed);
        $pin = $faker->personalIdentityNumber(\DateTime::createFromFormat('Y-m-d', $birthdate));
        $this->assertEquals($expected, $pin);
    }

    public function testPersonalIdentityNumberGeneratesCompliantNumbers(): void
    {
        if (\strtotime('1800-01-01 00:00:00')) {
            $min = '1900';
            $max = '2099';
            for ($i = 0; $i < 10; ++$i) {
                $birthdate = $this->faker->dateTimeBetween('1800-01-01 00:00:00', '1899-12-31 23:59:59');
                $pin = $this->faker->personalIdentityNumber($birthdate, null, true);
                $this->assertMatchesRegularExpression('/^[0-9]{6}\+[0-9]{3}[0-9ABCDEFHJKLMNPRSTUVWXY]$/', $pin);
            }
        } else { // timestamp limit for 32-bit computer
            $min = '1902';
            $max = '2037';
        }
        for ($i = 0; $i < 10; ++$i) {
            $birthdate = $this->faker->dateTimeBetween("$min-01-01 00:00:00", '1999-12-31 23:59:59');
            $pin = $this->faker->personalIdentityNumber($birthdate);
            $this->assertMatchesRegularExpression('/^[0-9]{6}-[0-9]{3}[0-9ABCDEFHJKLMNPRSTUVWXY]$/', $pin);
        }
        for ($i = 0; $i < 10; ++$i) {
            $birthdate = $this->faker->dateTimeBetween('2000-01-01 00:00:00', "$max-12-31 23:59:59");
            $pin = $this->faker->personalIdentityNumber($birthdate);
            $this->assertMatchesRegularExpression('/^[0-9]{6}A[0-9]{3}[0-9ABCDEFHJKLMNPRSTUVWXY]$/', $pin);
        }
    }

    public function testPersonalIdentityNumberGeneratesOddValuesForMales(): void
    {
        $pin = $this->faker->personalIdentityNumber(null, 'male');
        $this->assertEquals(1, $pin[9] % 2);
    }

    public function testPersonalIdentityNumberGeneratesEvenValuesForFemales(): void
    {
        $pin = $this->faker->personalIdentityNumber(null, 'female');
        $this->assertEquals(0, $pin[9] % 2);
    }
}
