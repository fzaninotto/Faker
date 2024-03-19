<?php

namespace Faker\Calculator;

use InvalidArgumentException;

class TCNo
{
    /**
     * Generates Turkish Identity Number Checksum
     * Gets first 9 digit as prefix and calculates checksum.
     *
     * https://en.wikipedia.org/wiki/Turkish_Identification_Number
     */
    public static function checksum(string $identityPrefix): string
    {
        if (9 !== \strlen($identityPrefix)) {
            throw new InvalidArgumentException('Argument should be an integer and should be 9 digits.');
        }

        $oddSum = 0;
        $evenSum = 0;

        $identityArray = \array_map(static fn(int $digit) => $digit, \str_split($identityPrefix)); // Creates array from int
        foreach ($identityArray as $index => $digit) {
            if (0 === $index % 2) {
                $evenSum += $digit;
            } else {
                $oddSum += $digit;
            }
        }

        $tenthDigit = (7 * $evenSum - $oddSum) % 10;
        $eleventhDigit = ($evenSum + $oddSum + $tenthDigit) % 10;

        return $tenthDigit.$eleventhDigit;
    }

    /**
     * Checks whether a TCNo has a valid checksum.
     */
    public static function isValid(string $tcNo): bool
    {
        return self::checksum(\substr($tcNo, 0, -2)) === \substr($tcNo, -2, 2);
    }
}
