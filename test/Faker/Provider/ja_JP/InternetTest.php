<?php

namespace Faker\Test\Provider\ja_JP;

use Faker\Provider\ja_JP\Internet;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class InternetTest extends TestCase
{
    public function testUserName()
    {
        self::assertEquals('akira72', $this->faker->userName);
    }

    public function testDomainName()
    {
        self::assertEquals('nakajima.com', $this->faker->domainName);
    }

    protected function getProviders(): iterable
    {
        yield new Internet($this->faker);
    }
}
