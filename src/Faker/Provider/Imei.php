<?php

namespace Faker\Provider;

class Imei
{
    /**
     * International Mobile Equipment Identity (IMEI)
     *
     * @link http://pt.wikipedia.org/wiki/International_Mobile_Equipment_Identity
     * @link http://imei-number.com/imei-validation-check/
     * @example '720084494799532'
     * @return int $imei
     */
    public function imei()
    {
        $code = rand(1, 9);
        $code = $code . rand(0, 9);
        $code = $code . rand(0, 9);
        $code = $code . rand(0, 9);
        $code = $code . rand(0, 9);
        $code = $code . rand(0, 9);
        $code = $code . rand(0, 9);
        $code = $code . rand(0, 9);
        $code = $code . rand(0, 9);
        $code = $code . rand(0, 9);
        $code = $code . rand(0, 9);
        $code = $code . rand(0, 9);
        $code = $code . rand(0, 9);
        $code = $code . rand(0, 9);
        $position = 0;
        $total = 0;
        while ($position < strlen($code)) {
            if ($position % 2 == 0) {
                $prod = 1;
            } else {
                $prod = 2;
            }
            $actualNum = $prod * $code[$position];
            if ($actualNum > 9) {
                $strNum = strval($actualNum);
                $total += $strNum[0] + $strNum[1];
            } else {
                $total += $actualNum;
            }
            $position++;
        }
        $last = 10 - ($total % 10);
        if ($last == 10) {
            $imei = $code . 0;
        } else {
            $imei = $code . $last;
        }
        return $imei;
    }
}
