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
        } while (call_user_func($function, $x) < $y);

        return floor($x * ($max - $min + 1) + $min);
    }
    /**
     * Returns a random element from a provided array.
     * Each element has a given probability to come out.
     *
     * @param  array            $array           Array to take elements from. Defaults to a-f
     * @param  $array           $bias            Array of float probabilities. Their sum must be 1.
     *
     * @throws \LengthException When array and bias don't have the same size
     * @throws \LogicException When the sum of bias elements isn't equal to 1.0
     * @return mixed
     */
    public function biasedElementBetween(array $array = array('a', 'b'), array $bias = array(.50,.50)) {
        $b_count = count($bias);
        $a_count = count($array);
        if($b_count!=$a_count){
            throw new \LengthException(sprintf('array has %d elements, while bias has %d', $a_count, $b_count));
        }
        $tot_bias = array_sum($bias);
        if($tot_bias != 1.0){
            throw new \LogicException(sprintf('Summing all elements of bias returns %f instead of 1', $tot_bias));
        }
        if($a_count == 1){
            return $a[0];
        }
        if($a_count == 0){
            return null;
        }
        $element = mt_rand();
        $max = mt_getrandmax();
        $i=0;
        $thresh = 0;
        do {
            $thresh = $thresh + $max*$bias[$i];
            if($element<$thresh){
                return $array[$i];
            }
            $i++;
        } while($i<$a_count);
    }

    /**
     * 'unbiased' creates an unbiased distribution by giving
     * each value the same value of one.
     *
     * @return integer
     */
    protected static function unbiased()
    {
        return 1;
    }

    /**
     * 'linearLow' favors lower numbers. The probability decreases
     * in a linear fashion.
     *
     * @return integer
     */
    protected static function linearLow($x)
    {
        return 1 - $x;
    }

    /**
     * 'linearHigh' favors higher numbers. The probability increases
     * in a linear fashion.
     *
     * @return integer
     */
    protected static function linearHigh($x)
    {
        return $x;
    }
}
