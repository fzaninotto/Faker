<?php

namespace Faker\Provider;


class Biased extends Base
{
    /**
     * Returns a biased integer between $min and $max (both inclusive).
     * The distribution depends on $function.
     *
     * The algorithm creates two doubles, x ∈ [0, 1], y ∈ [0, 1) and checks whether the
     * return value of $function for x is greater than or equal to y. If this is
     * the case the number is accepted and x is mapped to the appropriate integer
     * between $min and $max. Otherwise two new doubles are created until the pair
     * is accepted.
     *
     * @param integer $min Minimum value of the generated integers.
     * @param integer $max Maximum value of the generated integers.
     * @param callable $function A function mapping x ∈ [0, 1] onto a double ∈ [0, 1]
     * @return integer An integer between $min and $max.
     */
    public function biasedNumberBetween($min = 0, $max = 100, $function = 'sqrt')
    {
        do {
            $x = mt_rand() / mt_getrandmax();
            $y = mt_rand() / (mt_getrandmax() + 1);
        } while (self::formula($function, $x) < $y);

        return floor($x * ($max - $min + 1) + $min);
    }

    protected static function formula($function, $x)
    {
        switch ($function) {
            case 'unbiased':
                return 1;
                break;
            case 'linearLow':
                return 1 - $x;
                break;
            case 'linearHigh':
                return $x;
                break;
            case 'sqrt':
                return sqrt($x);
                break;
            case 'square':
                return $x ** 2;
                break;
            case 'cube':
                return $x ** 3;
                break;
            default:
                return 1;
                break;
        }
    }
}
