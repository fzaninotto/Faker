<?php

namespace Faker\PHPUnit\Framework\Constraint;

class IsValidSiret extends IsValidSirenSiret
{

    protected function getLength()
    {
        return 14;
    }

    protected function getName()
    {
        return 'SIRET';
    }

}
