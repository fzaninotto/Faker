<?php

namespace Faker\Provider;

class Physics extends Base 
{
    /**
     * Returns a degree of temperature based on a random number between $int1 and $int2 (any order)
     *
     * @param string  $degree default to C
     * @param integer $int1 default to 0
     * @param integer $int2 defaults to 32 bit max integer, ie 2147483647
     * @example 10°C
     *
     * @return integer
     */
    public function temperature($degree = 'C', $int1 = -300, $int2 = 300)
    {
        $degrees = array('C', 'F', 'K');

        if (!in_array($degree, $degrees))
        {
            throw new \InvalidArgumentException('temperature() generates degrees of temperature basead on a random number. To generate degrees, use C for Celsis, F for  Fahrenheit and k for kelvin in the first argument.');
        }

        $degree = static::numberBetween($int1, $int2) . '°' . $degree;

        return $degree;
    }
}
