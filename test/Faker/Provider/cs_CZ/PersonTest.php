<?php

namespace Faker\Test\Provider\cs_CZ;

use Faker\Provider\cs_CZ\Person;
use Faker\Provider\Miscellaneous;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testBirthNumber(): void
    {
        for ($i = 0; $i < 1000; ++$i) {
            $birthNumber = $this->faker->birthNumber();
            $birthNumber = str_replace('/', '', $birthNumber);

            // check date
            $year = (int) substr($birthNumber, 0, 2);
            $month = (int) substr($birthNumber, 2, 2);
            $day = (int) substr($birthNumber, 4, 2);

            // make 4 digit year from 2 digit representation
            $year += $year < 54 ? 2000 : 1900;

            // adjust special cases for month
            if ($month > 50) {
                $month -= 50;
            }

            if ($year >= 2004 && $month > 20) {
                $month -= 20;
            }

            self::assertTrue(checkdate($month, $day, $year), "Birth number $birthNumber: date $year/$month/$day is invalid.");

            // check CRC if presented
            if (strlen($birthNumber) == 10) {
                $crc = (int) substr($birthNumber, -1);
                $refCrc = (int) substr($birthNumber, 0, -1) % 11;

                if ($refCrc == 10) {
                    $refCrc = 0;
                }
                self::assertEquals($crc, $refCrc, "Birth number $birthNumber: checksum $crc doesn't match expected $refCrc.");
            }
        }
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);

        yield new Miscellaneous($this->faker);
    }
}
