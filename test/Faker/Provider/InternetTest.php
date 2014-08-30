<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Company;
use Faker\Provider\Internet;
use Faker\Provider\Lorem;
use Faker\Provider\Person;

class InternetTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Lorem($faker));
        $faker->addProvider(new Person($faker));
        $faker->addProvider(new Internet($faker));
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    public function testEmailIsValid()
    {
        $emailaddress = $this->faker->email();
        $this->assertNotFalse(filter_var($emailaddress, FILTER_VALIDATE_EMAIL));
    }

    public function testUsernameIsValid()
    {
        $pattern = '/^[A-Za-z0-9_.]+$/';
        $emailaddress = $this->faker->username();
        $this->assertSame(preg_match($pattern, $emailaddress), 1);
    }

    public function testPasswordIsValid()
    {
        $this->assertRegexp('/^.{6}$/', $this->faker->password(6, 6));
    }

    public function testSlugIsValid()
    {
        $pattern = '/^[a-z0-9-]+$/';
        $slug = $this->faker->slug();
        $this->assertSame(preg_match($pattern, $slug), 1);
    }

    public function testUrlIsValid()
    {
        $url = $this->faker->url();
        $this->assertNotFalse(filter_var($url, FILTER_VALIDATE_URL));
    }

    public function testLocalIpv4()
    {
        $this->assertNotFalse(filter_var(Internet::localIpv4(), FILTER_VALIDATE_IP, FILTER_FLAG_IPV4));
    }

    public function testIpv4()
    {
        $this->assertNotFalse(filter_var($this->faker->ipv4(), FILTER_VALIDATE_IP, FILTER_FLAG_IPV4));
    }

    public function testIpv6()
    {
        $this->assertNotFalse(filter_var($this->faker->ipv6(), FILTER_VALIDATE_IP, FILTER_FLAG_IPV6));
    }

    public function testMacAddress()
    {
        $this->assertRegExp('/^([0-9A-F]{2}[:]){5}([0-9A-F]{2})$/i', Internet::macAddress());
    }
}
