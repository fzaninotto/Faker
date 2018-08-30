<?php

namespace Faker\Provider\en_GB;

use Faker\Provider\Base;

class DriverLicenceNumber
{
    /**
     * Generates a valid UK driver's license number using the personal data provided
     * Using the current rules from https://www.licencebureau.co.uk/driver-licence-number/
     *
     * @param string|null $sGender 'F' for female, anything else for male
     * @param string $sFirstName
     * @param string $sMiddleName
     * @param string $sFamilyName
     * @param string $aBirthDate should be in the format DD-MM-YYYY
     * @return string
     */
    public function driverLicenceNumber($sGender = null, $sFirstName = '', $sMiddleName = '', $sFamilyName = '', $aBirthDate = '01-01-1970')
    {
        // The first half of the number is based on info about the person it belongs to, so we know what this should be
        // The second half isn't predictable, so use random numbers/letters

        $aBirthDate = explode('-', $aBirthDate);
        $sBirthYear = $aBirthDate[2];
        $sBirthMonth = $aBirthDate[1];
        $sBirthDay = $aBirthDate[0];

        $aParts = [];

        // 1–5: The first five characters of the surname (padded with 9s if less than 5 characters)
        $aParts[] = substr(preg_replace('/[^A-Z]/', '', strtoupper($sFamilyName)), 0, 5);
        $aParts[0] = str_pad($aParts[0], 5, '9');

        // 6: The decade digit from the year of birth (e.g. for 1987 it would be 8)
        $aParts[] = substr($sBirthYear, 2, 1); // BirthYear[2]

        // 7–8: The month of birth (7th character incremented by 5 if driver is female i.e. 51–62 instead of 01–12)
        $aParts[] = ($sGender === 'F') ? $sBirthMonth + 50 : $sBirthMonth;

        // 9–10: The date within the month of birth
        $aParts[] = $sBirthDay;

        // 11: The year digit from the year of birth (e.g. for 1987 it would be 7)
        $aParts[] = substr($sBirthYear, 3, 1); // BirthYear[3]

        // 12–13: The first two initials of the first names, padded with a 9 if no middle name
        $sFirstName = substr(preg_replace('/[^A-Z]/', '', strtoupper($sFirstName)), 0, 1);
        $sMiddleName = substr(preg_replace('/[^A-Z]/', '', strtoupper($sMiddleName)), 0, 1);
        $aParts[] = str_pad($sFirstName, 1, '9') . str_pad($sMiddleName, 1, '9');

        // 14: Arbitrary digit – usually 9, but decremented to differentiate drivers with the first 13 characters in common
        $aParts[] = Base::randomDigit();

        // 15–16: Two computer check digits.
        $aParts[] = strtoupper(Base::randomLetter().Base::randomLetter());

        // 17–18: Appended, two digits representing the licence issue, which increases by 1 for each licence issued.
        $aParts[] = Base::randomDigit();
        $aParts[] = Base::randomDigit();

        return implode('', $aParts);
    }
}
