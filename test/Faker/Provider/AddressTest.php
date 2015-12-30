<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Address;

class AddressTest extends \PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }
}
