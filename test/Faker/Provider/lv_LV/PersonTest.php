<?php

namespace Faker\Test\Provider\lv_LV;

use Faker\Provider\lv_LV\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testPersonalIdentityNumber(): void
    {
        $idNumber = $this->faker->personalIdentityNumber();

        self::assertMatchesRegularExpression('/^[0-9]{6}-[0-9]{5}$/', $idNumber);
    }

    public function testChecksumDigitCalculation(): void
    {
        $idNumber = $this->faker->personalIdentityNumber(\DateTime::createFromFormat('Y-m-d', '1981-05-24'));

        $serialNumber = substr($idNumber, 8, 3);
        $serialNumberSplit = str_split($serialNumber);

        // calculate checksum, using static digits from date (2 4 0 5 8 1 1) and inserting random serial number digits
        $checksumDigit = (1101 - (1 * 2 + 6 * 4 + 3 * 0 + 7 * 5 + 9 * 8 + 10 * 1 + 5 * 1 + 8 * (int) $serialNumberSplit[0] + 4 * (int) $serialNumberSplit[1] + 2 * (int) $serialNumberSplit[2])) % 11 % 10;

        self::assertSame('240581-1' . $serialNumber . $checksumDigit, $idNumber);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
