<?php

namespace Faker\Calculator;

/**
 * Utility class for generating mod11 checksum and validating a number.
 * Some code ported from @link http://www.braemoor.co.uk/software/vat.shtml
 */
class Vat
{
    /**
     * @param string $number
     * @param int $country two letter country code
     * @return int
     */
    public static function computeCheckDigit($number, $country)
    {
        $methodName = 'checksum' . $country;
        return self::$methodName($number);
    }

    /**
     * Checks whether a number (partial number + check digit) is mod11 compliant
     *
     * @param string $number
     * @param string $country two letter country code, if null, the number should contain it as the prefix
     * @return boolean
     */
    public static function isValid($number, $country = null)
    {
        if ($country === null) {
            $country = substr($number, 0, 2);
            $number = substr($number, 2);
        }
        return self::computeCheckDigit(substr($number, 0, -1), $country) === (int)substr($number, -1);
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumAT($number)
    {
        $sum = 0;
        $weights = array(1, 2, 1, 2, 1, 2, 1);

        for ($i = 0; $i < 7; $i++) {
            $temp = (int)$number{$i} * $weights[$i];
            $sum += $temp < 10 ? $temp : ((int)floor($temp / 10.0) + $temp % 10);
        }

        $sum = 10 - ($sum + 4) % 10;
        if ($sum == 10) {
            $sum = 0;
        }

        return $sum;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumBE($number)
    {
        if (strlen($number) === 7) {
            $number = '0' . $number;
        }

        return 97 - (int)substr($number, 0, 8) % 97;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumBG($number)
    {
        if (strlen($number) === 9) {
            $sum = 0;
            for ($i = 0; $i < 8; $i++) {
                $sum += (int)$number{$i} * ($i + 1);
            }

            $sum = $sum % 11;
            if ($sum != 10) {
                return $sum;
            }


            $sum = 0;
            for ($i = 0; $i < 8; $i++) {
                $sum += (int)$number{$i} * ($i + 3);
            }

            $sum = $sum % 11;

            return $sum === 10 ? 0 : $sum;
        }

        if (preg_match('/^\d\d[0-5]\d[0-3]\d\d{3}$/', $number)) {
            // standard physical person
            $month = substr($number, 2, 2);

            if (($month > 0 && $month < 13) || ($month > 20 && $month < 33) || ($month > 40 && $month < 53)) {
                $weights = array(2, 4, 8, 5, 10, 9, 7, 3, 6);
                $sum = 0;
                for ($i = 0; $i < 9; $i++) {
                    $sum += (int)$number{$i} * $weights[$i];
                }

                $sum = $sum % 11;

                if ($sum === 10) {
                    $sum = 0;
                }

                return $sum;
            }
        }

        // foreigner
        $weights = array(21, 19, 17, 13, 11, 9, 7, 3, 1);
        $sum = 0;
          for ($i = 0; $i < 9; $i++) {
              $sum += (int)$number{$i} * $weights[$i];
          }

            $sum %= 10;

        return $sum;

        // miscellaneous

        /*$weights = array(4, 3, 2, 7, 6, 5, 4, 3, 2);
        $sum = 0;
        for ($i = 0; $i < 9; $i++) {
            $sum += (int)$number * $weights[i];
        }


        $sum = 11 - $sum % 11;
        //if ($sum === 10)
        if ($sum === 11) {
            $sum = 0;
        }

        return $sum;*/
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumCH($number)
    {

        $weights = array(5, 4, 3, 2, 7, 6, 5, 4);
        $sum = 0;
        for ($i = 0; $i < 8; $i++) {
            $sum += (int)$number * $weights[$i];
        }


        $sum = 11 - $sum % 11;
        //if (total == 10) return false;
        if ($sum === 11) {
            $sum = 0;
        }
        return $sum;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumCY($number)
    {
        $sum = 0;
        $weights = array(1, 0, 5, 7, 9);
        for ($i = 0; $i < 8; $i++) {
            $temp = (int)$number{$i};
            if ($i % 2 === 0) {
                if (isset($weights[$temp])) {
                    $sum += $weights[$temp];
                } else {
                    $sum += $temp * 2 + 3;
                }
            } else {
                $sum += $temp;
            }
        }

        $sum %= 26;

        return chr($sum + 65);
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumCZ($number)
    {
        $sum = 0;
        $weights = array(8, 7, 6, 5, 4, 3, 2);
        if (strlen($number) === 7) {
            // Legal entities
            for ($i = 0; $i < 7; $i++) {
                $sum += (int)$number{$i} * $weights[$i];
            }

            $sum = 11 - $sum % 11;
            if ($sum === 10) {
                $sum = 0;
            }
            if ($sum === 11) {
                $sum = 1;
            }

            return $sum;
        } elseif (strlen($number) === 8 && (int)$number{0} === 6) {
            for ($i = 0; $i < 7; $i++) {
                $sum += (int)$number{$i+1} * $weights[$i];
            }
            $sum = 11 - $sum % 11;
            if ($sum === 10) {
                $sum = 0;
            }
            if ($sum === 11) {
                $sum = 1;
            }
            $lookups = array(8,7,6,5,4,3,2,1,0,9,10);
            return $lookups[$sum - 1];
        } else {
            $temp = 0;
            for ($i = 0; $i < 10; $i += 2) {
                $temp += (int)substr($number, $i, 2);
            }

            //! @todo
            return $sum % 11;
        }
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumDE($number)
    {
        $factor = 10;

        for ($i = 0; $i < 8; $i++) {
            $sum = ((int)$number{$i} + $factor) % 10;
            if ($sum === 0) {
                $sum = 10;
            }
            $factor = ($sum * 2) % 11;
        }

        return 11 - $factor === 10 ? 0 : $factor;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumDK($number)
    {
        $sum = 0;
        $weights = array(2, 7, 6, 5, 4, 3, 2, 1);

        for ($i = 0; $i < 8; $i++) {
            $sum += (int)$number{$i} * $weights[$i];
        }

        return $sum % 11;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumEE($number)
    {
        $sum = 0;
        $weights = array(3, 7, 1, 3, 7, 1, 3, 7);

        for ($i = 0; $i < 8; $i++) {
            $sum += (int)$number{$i} * $weights[$i];
        }

        $sum = 10 - $sum % 10;
        if ($sum === 10) {
            $sum = 0;
        }

        return $sum;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumEL($number)
    {
        $sum = 0;
        $weights = array(256, 128, 64, 32, 16, 8, 4, 2);

        if (strlen($number) === 7) {
            $number = '0' . $number;
        }

        // Extract the next digit and multiply by the counter.
        for ($i = 0; $i < 8; $i++) {
            $sum += (int)$number{$i} * $weights[$i];
        }

        $sum = $sum % 11;
        if ($sum > 9) {
            $sum = 0;
        }

        return $sum;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumES($number)
    {
        return 0;
        /*
        var total = 0;
        var temp = 0;
        var multipliers = [2,1,2,1,2,1,2];
        var esexp = new Array ();
  esexp[0] = (/^[A-H|J|U|V]\d{8}$/);
  esexp[1] = (/^[A-H|N-S|W]\d{7}[A-J]$/);
  esexp[2] = (/^[0-9|Y|Z]\d{7}[A-Z]$/);
  esexp[3] = (/^[K|L|M|X]\d{7}[A-Z]$/);
  var i = 0;

  // National juridical entities
  if (esexp[0].test(vatnumber)) {

            // Extract the next digit and multiply by the counter.
            for (i = 0; i < 7; i++) {
                temp = Number(vatnumber.charAt(i+1)) * multipliers[i];
      if (temp > 9)
          total += Math.floor(temp/10) + temp%10
      else
          total += temp;
    }
            // Now calculate the check digit itself.
            total = 10 - total % 10;
            if (total == 10) {total = 0;}

            // Compare it with the last character of the VAT number. If it's the same, then it's valid.
            if (total == vatnumber.slice (8,9))
                return true
    else
        return false;
        }

  // Juridical entities other than national ones
  else if (esexp[1].test(vatnumber)) {

            // Extract the next digit and multiply by the counter.
            for (i = 0; i < 7; i++) {
                temp = Number(vatnumber.charAt(i+1)) * multipliers[i];
      if (temp > 9)
          total += Math.floor(temp/10) + temp%10
      else
          total += temp;
    }

            // Now calculate the check digit itself.
            total = 10 - total % 10;
            total = String.fromCharCode(total+64);

            // Compare it with the last character of the VAT number. If it's the same, then it's valid.
            if (total == vatnumber.slice (8,9))
                return true
    else
        return false;
        }

  // Personal number (NIF) (starting with numeric of Y or Z)
  else if (esexp[2].test(vatnumber)) {
            var tempnumber = vatnumber;
            if (tempnumber.substring(0,1) == 'Y') tempnumber = tempnumber.replace (/Y/, "1");
    if (tempnumber.substring(0,1) == 'Z') tempnumber = tempnumber.replace (/Z/, "2");
  	return tempnumber.charAt(8) == 'TRWAGMYFPDXBNJZSQVHLCKE'.charAt(Number(tempnumber.substring(0,8)) % 23);
  }

  // Personal number (NIF) (starting with K, L, M, or X)
  else if (esexp[3].test(vatnumber)) {
            return vatnumber.charAt(8) == 'TRWAGMYFPDXBNJZSQVHLCKE'.charAt(Number(vatnumber.substring(1,8)) % 23);
        }

  else return false;*/
}

    /**
     * @param string $number
     * @return int
     */
    public static function checksumFI($number)
    {
        $sum = 0;
        $weights = array(7, 9, 10, 5, 8, 4, 2);

        for ($i = 0; $i < 7; $i++) {
            $sum += (int)$number{$i} * $weights[$i];
        }

        $sum = 11 - $sum % 11;
        if ($sum > 9) {
            $sum = 0;
        }
        return $sum;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumFR($number)
    {
        return ((int)substr($number, 2) * 100 + 12) % 97;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumGB($number)
    {
        if (substr($number, 0, 2) === 'GD' || substr($number, 0, 2) === 'HA') {
            return '';
        }
        $sum = 0;
        $weights = array(8, 7, 6, 5, 4, 3, 2);

        for ($i = 0; $i < 7; $i++) {
            $sum += (int)$number{$i} * $weights[$i];
        }

        while ($sum > 0) {
            $sum -= 97;
        }
        return abs($sum);
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumHR($number)
    {
        $factor = 10;

        for ($i = 0; $i < 10; $i++) {
            $sum = ((int)$number{$i} + $factor) % 10;
            if ($sum === 0) {
                $sum = 10;
            }
            $factor = ($sum * 2) % 11;
        }

        return $factor;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumHU($number)
    {
        $sum = 0;
        $weights = array(9, 7, 3, 1, 9, 7, 3);

        for ($i = 0; $i < 7; $i++) {
            $sum += (int)$number * $weights[$i];
        }


        $sum = 10 - $sum % 10;
        if ($sum === 10) {
            $sum = 0;
        }

        return $sum;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumIE($number)
    {
        $sum = 0;
        $weights = array(8, 7, 6, 5, 4, 3, 2);

        for ($i = 0; $i < 7; $i++) {
            $sum += (int)$number * $weights[$i];
        }

        $sum = $sum % 23;

        return $sum === 0 ? "W" : chr($sum + 64);
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumIT($number)
    {
        $sum = 0;
        $weights = array(1, 2, 1, 2, 1, 2, 1, 2, 1, 2);

        for ($i = 0; $i < 10; $i++) {
            $temp = (int)$number{$i} * $weights[$i];

            $sum += $temp < 10 ? $temp : ((int)floor($temp / 10) + $temp % 10);
        }

        // Establish check digit.
        $sum = 10 - $sum % 10;
        if ($sum > 9) {
            $sum = 0;
        }

        return $sum;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumLT($number)
    {
        if (strlen($number) === 8) {
            $sum = 0;
            for ($i = 0; $i < 8; $i++) {
                $sum += (int)$number{$i} * ($i + 1);
            }
            if ($sum % 11 == 10) {
                $sum = 0;
                $weights = array(3, 4, 5, 6, 7, 8, 9, 1);
                for ($i = 0; $i < 8; $i++) {
                    $sum += (int)$number{$i} * $weights[$i];
                }
            }


            $sum = $sum % 11;
            if ($sum === 10) {
                $sum = 0;
            }

            return $sum;
        }

        $sum = 0;
        $weights = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 1, 2);
        for ($i = 0; $i < 11; $i++) {
            $sum += (int)$number{$i} * $weights[$i];
        }
        if ($sum % 11 == 10) {
            $sum = 0;
            $weights = array(3,4,5,6,7,8,9,1,2,3,4);
            for ($i = 0; $i < 11; $i++) {
                $sum += (int)$number{$i} * $weights[$i];
            }
        }

        $sum = $sum % 11;
        if ($sum === 10) {
            $sum = 0;
        }
        return $sum;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumLU($number)
    {
        //! @todo
        return 0;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumLV($number)
    {
        $sum = 0;
        $weights = array(9, 1, 4, 8, 3, 10, 2, 5, 7, 6);
        for ($i = 0; $i < 10; $i++) {
            $sum += (int)$number{$i} * $weights[$i];
        }


        if ($sum % 11 === 4 && (int)$number{0} === 9) {
            $sum = $sum - 45;
        }
        if ($sum % 11 === 4) {
            $sum = 4 - $sum % 11;
        } elseif ($sum % 11 > 4) {
            $sum = 14 - $sum % 11;
        } elseif ($sum % 11 < 4) {
            $sum = 3 - $sum % 11;
        }

        return $sum;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumMT($number)
    {
        $sum = 0;
        $weights = array(3, 4, 6, 7, 8, 9);

        for ($i = 0; $i < 6; $i++) {
            $sum += (int)$number{$i} * $weights[$i];
        }

        return  37 - $sum % 37;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumNL($number)
    {
        $sum = 0;
        $weights = array(9, 8, 7, 6, 5, 4, 3, 2);

        for ($i = 0; $i < 8; $i++) {
            $sum += (int)$number{$i} * $weights[$i];
        }


        $sum = $sum % 11;
        if ($sum > 9) {
            $sum = 0;
        }

        return $sum;

    }

    /**
     * @link http://www.brreg.no/english/coordination/number.html
     * @param string $number
     * @return int
     */
    public static function checksumNO($number)
    {
        $sum = 0;
        $weights = array(3, 2, 7, 6, 5, 4, 3, 2);

        for ($i = 0; $i < 8; $i++) {
            $sum += (int)$number{$i} * $weights[$i];
        }


        $sum = 11 - $sum % 11;
        if ($sum === 11) {
            $sum = 0;
        }

        return $sum;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumPL($number)
    {
        $sum = 0;
        $weights = array(6, 5, 7, 2, 3, 4, 5, 6, 7);
        for ($i = 0, $length = strlen($number); $i < $length; $i++) {
            $sum += (int)$number{$i} * $weights[$i];
        }
        return $sum % 11;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumPT($number)
    {
        $sum = 0;
        $factor = 2;

        for ($i = strlen($number); $i > 0; $i--) {
            $sum += (int)$number{$i - 1} * $factor;
            if ($factor === 9) {
                $factor = 1;
            }
            $factor++;
        }
        $sum = $sum % 11;

        return $sum === 0 || $sum === 1 ? 0 : 11 - $sum;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumRO($number)
    {
        $sum = 0;
        $weights = array_slice(array(7, 5, 3, 2, 1, 7, 5, 3, 2), 10 - strlen($number));

        for ($i = 0; $i < strlen($number) - 1; $i++) {
            $sum += (int)$number{$i} * $weights[$i];
        }


        $sum = (10 * $sum) % 11;
        if ($sum === 10) {
            $sum = 0;
        }

        return $sum;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumRS($number)
    {
        $factor = 10;

        for ($i = 0; $i < 8; $i++) {
            $sum = ((int)$number{$i} + $factor) % 10;
            if ($sum === 0) {
                $sum = 10;
            }
            $factor = ($sum * 2) % 11;
        }

        return $factor;
    }

    /**
     * @link http://russianpartner.biz/test_inn.html
     * @param string $number
     * @return int
     */
    public static function checksumRU($number)
    {
        if (strlen($number) === 9) {
            $sum = 0;
            $weights = array(2, 4, 10, 3, 5, 9, 4, 6, 8, 0);
            for ($i = 0; $i < 10; $i++) {
                $sum += (int)$number{$i} * $weights[$i];
            }
            $sum = $sum % 11;
            if ($sum > 9) {
                $sum = $sum % 10;
            }
            return $sum;
        }
        $sum = 0;
        $weights = array(7, 2, 4, 10, 3, 5, 9, 4, 6, 8, 0);
        for ($i = 0; $i < 11; $i++) {
            $sum += (int)$number{$i} * $weights[$i];
        }
        $sum %= 11;
        if ($sum > 9) {
            $sum %= 10;
        }
        $result = $sum;

        $sum = 0;
        $weights = array(3, 7, 2, 4, 10, 3, 5, 9, 4, 6, 8, 0);
        for ($i = 0; $i < 11; $i++) {
            $sum += (int)$number{$i} * $weights[$i];
        }
        $sum %= 11;
        if ($sum > 9) {
            $sum %= 10;
        }
        return $result . $sum;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumSE($number)
    {
        $sum = 0;
        for ($i = 0; $i < 9; $i += 2) {
            $digit = (int)$number{$i};
            $sum += (int)floor($digit / 5.0)  + (($digit * 2) % 10);
        }
        for ($i = 1; $i < 9; $i += 2) {
            $sum += (int)$number{$i};
        }
        return (10 - $sum % 10) % 10;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumSI($number)
    {
        $sum = 0;
        $weights = array(8, 7, 6, 5, 4, 3, 2);
        for ($i = 0; $i < 7; $i++) {
            $sum += (int)$number{$i} * $weights[$i];
        }

        $sum = 11 - $sum % 11;
        if ($sum === 10) {
            $sum = 0;
        }
        return $sum;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksumSK($number)
    {
        //! @todo
        return (((int)$number % 11) == 0);
    }
}
