<?php

namespace Faker\Test\Provider\sv_SE;

use Faker\Generator;
use Faker\Provider\sv_SE\Municipality;
use Faker\Test\TestCase;

final class MunicipalityTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

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
