<?php

namespace Faker\ORM\Doctrine\Annotations;

use Doctrine\Common\Annotations\Annotation;

/** @Annotation */
class Fake extends Annotation
{
    public $enum, $value;
}