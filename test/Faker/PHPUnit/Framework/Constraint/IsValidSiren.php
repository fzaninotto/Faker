<?php

namespace Faker\PHPUnit\Framework\Constraint;

class IsValidSiren extends IsValidSirenSiret
{

    protected function getLength()
    {
        return 9;
    }

    protected function getName()
    {
        return 'SIREN';
    }

}
