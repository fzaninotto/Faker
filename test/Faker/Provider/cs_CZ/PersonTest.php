<?php

namespace Faker\Test\Provider\cs_CZ;

use Faker\Generator;
use Faker\Provider\cs_CZ\Person;
use Faker\Provider\Miscellaneous;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    public function testBirthNumber()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->addProvider(new Miscellaneous($faker));

        for ($i = 0; $i < 1000; $i++) {
            $birthNumber = $faker->birthNumber();
            $birthNumber = str_replace('/', '', $birthNumber);

            // check date
            $year = intval(substr($birthNumber, 0, 2), 10);
            $month = intval(substr($birthNumber, 2, 2), 10);
            $day = intval(substr($birthNumber, 4, 2), 10);

            // make 4 digit year from 2 digit representation
            $year += $year < 54 ? 2000 : 1900;

            // adjust special cases for month
            if ($month > 50) $month -= 50;
            if ($year >= 2004 && $month > 20) $month -= 20;

            $this->assertTrue(checkdate($month, $day, $year), "Birth number $birthNumber: date $year/$month/$day is invalid.");

            // check CRC if presented
            if (strlen($birthNumber) == 10) {
                $crc = intval(substr($birthNumber, -1), 10);
                $refCrc = intval(substr($birthNumber, 0, -1), 10) % 11;
                if ($refCrc == 10) {
                    $refCrc = 0;
                }
                $this->assertEquals($crc, $refCrc, "Birth number $birthNumber: checksum $crc doesn't match expected $refCrc.");
            }
        }
    }
}
