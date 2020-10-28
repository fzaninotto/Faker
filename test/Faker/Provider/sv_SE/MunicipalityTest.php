<?php

namespace Faker\Test\Provider\sv_SE;

use Faker\Calculator\Luhn;
use Faker\Generator;
use Faker\Provider\sv_SE\Municipality;
use Faker\Provider\sv_SE\Person;
use Faker\Test\TestCase;

final class MunicipalityTest extends TestCase
{
    /** @var Generator */
    protected $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Municipality($faker));
        $this->faker = $faker;
    }

    public function testGenerate()
    {
        $result = $this->faker->municipality();
        $this->assertNotEmpty($result);
    }
}
