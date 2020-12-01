<?php

namespace Faker\Test\Provider\ja_JP;

use Faker\Generator;
use Faker\Provider\ja_JP\Internet;
use Faker\Test\TestCase;

final class InternetTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Internet($faker));
        $faker->seed(1);
        $this->faker = $faker;
    }

    public function testUserName()
    {
        $this->assertEquals('akira72', $this->faker->userName);
    }

    public function testDomainName()
    {
        $this->assertEquals('nakajima.com', $this->faker->domainName);
    }
}
