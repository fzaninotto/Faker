<?php

namespace Faker\Test\Provider\es_VE;

use Faker\Generator;
use Faker\Provider\es_VE\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->seed(1);
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    /**
     * national Id format validator
     */
    public function testNationalId()
    {
        $pattern = '/(?:^V-?\d{5,9}$)|(?:^E-?\d{8,9}$)/';

        $cedula = $this->faker->nationalId;
        $this->assertRegExp($pattern, $cedula);

        $cedula = $this->faker->nationalId('-');
        $this->assertRegExp($pattern, $cedula);
    }
}
