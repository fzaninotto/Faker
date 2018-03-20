<?php

namespace Faker\Test\Provider\es_MX;

class Person extends \Faker\Provider\es_MX\Person
{
    public static function removeAccents($name)
    {
        return parent::removeAccents($name);
    }
}
