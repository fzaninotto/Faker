<?php

namespace Faker\Test\Provider\es_VE;

use Faker\Generator;
use Faker\Provider\es_VE\Person;
use Faker\Test\TestCase;

final class PersonTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
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
        $this->assertMatchesRegularExpression($pattern, $cedula);

        $cedula = $this->faker->nationalId('-');
        $this->assertMatchesRegularExpression($pattern, $cedula);
    }
}
