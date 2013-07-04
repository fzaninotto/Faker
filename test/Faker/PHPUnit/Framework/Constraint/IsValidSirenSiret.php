<?php

namespace Faker\PHPUnit\Framework\Constraint;

abstract class IsValidSirenSiret extends \PHPUnit_Framework_Constraint
{
    protected function matches($other)
    {

        $code = str_replace(' ', '', $other);

        if (strlen($code) != $this->getLength()) {
            return false;
        }

        $sum = 0;
        // IMPORTANT : from right to left
        $position = 1;
        for ($i = strlen($code) - 1; $i >= 0; $i--) {
            $isEven = (($position++ % 2) === 0);
            $tmp = $isEven ? $code[$i] * 2 : $code[$i];
            if ($tmp >= 10) $tmp -= 9;
            $sum += $tmp;
        }

        return ($sum % 10 === 0);

    }

    public function toString()
    {
        return sprintf('is a valid %s number', $this->getName());
    }

    abstract protected function getLength();

    abstract protected function getName();

}
