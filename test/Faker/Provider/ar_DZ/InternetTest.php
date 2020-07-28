<?php

namespace Faker\Test\Provider\ar_DZ;

use Faker\Generator;
use Faker\Provider\ar_DZ\Internet;
use PHPUnit\Framework\TestCase;

final class InternetTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Internet($faker));
        $this->faker = $faker;
    }

    public function testEmailIsValid()
    {
        $email = $this->faker->email();
        $this->assertNotFalse(filter_var($email, FILTER_VALIDATE_EMAIL));
    }

    public function testUserNameIsValid()
    {
        $userName = $this->faker->userName;
        $this->assertNotNull($userName);
    }

    public function testDomainName()
    {
        $domain = 'http://' . $this->faker->domainName;
        $this->assertNotFalse(filter_var($domain, FILTER_VALIDATE_URL));

    }
}
