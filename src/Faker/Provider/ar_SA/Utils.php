<?php

namespace Faker\Provider\ar_SA;

use Faker\Calculator\Luhn;
use Faker\Provider\Base as BaseProvider;

class Utils
{
    public static function generateLuhnNumber($prefix, $length)
    {
        $pattern = $prefix . str_repeat('#', $length - strlen($prefix) - 1);
        $partialValue = BaseProvider::numerify($pattern);
        return $partialValue . Luhn::computeCheckDigit($partialValue);
    }
}
