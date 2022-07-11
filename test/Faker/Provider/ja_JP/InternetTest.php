<?php

namespace Faker\Test\Provider\ja_JP;

use Faker\Generator;
use Faker\Provider\ja_JP\Internet;
use PHPUnit\Framework\TestCase;

final class InternetTest extends TestCase
{
    public function testUserName()
    {
        $faker = new Generator();
        $faker->addProvider(new Internet($faker));
        $faker->seed(1);

        $this->assertEquals('akira72', $faker->userName);
    }

    public function testDomainName()
    {
        $faker = new Generator();
        $faker->addProvider(new Internet($faker));
        $faker->seed(1);

        $this->assertEquals('nakajima.com', $faker->domainName);
    }
}
