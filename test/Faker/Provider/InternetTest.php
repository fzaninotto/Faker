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

    /**
     * @link http://stackoverflow.com/questions/12026842/how-to-validate-an-email-address-in-php
     */
    public function testEmailIsValid()
    {
        $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
        $emailaddress = $this->faker->email();
        $this->assertSame(preg_match($pattern, $emailaddress), 1);
    }

    public function testUsernameIsValid()
    {
        $pattern = '/^[A-Za-z0-9_.]+$/';
        $emailaddress = $this->faker->username();
        $this->assertSame(preg_match($pattern, $emailaddress), 1);
    }

    public function testSlugIsValid()
    {
        $pattern = '/^[a-z0-9-]+$/';
        $slug = $this->faker->slug();
        $this->assertSame(preg_match($pattern, $slug), 1);
    }

    /**
     * @link http://code.tutsplus.com/tutorials/8-regular-expressions-you-should-know--net-6149
     */
    public function testUrlIsValid()
    {
        $pattern = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
        $url = $this->faker->url();
        $this->assertSame(preg_match($pattern, $url), 1);
    }

    public function testLocalIpv4()
    {
        $range1 = '(10)(\.(([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])|[1][0-9][0-9]|[1-9][0-9]|[0-9])){3}';
        $range2 = '(192)\.(168)(\.(([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])|[1][0-9][0-9]|[1-9][0-9]|[0-9])){2}';
        $this->assertRegExp('/^'.$range1.'|'.$range2.'$/', Internet::localIpv4());
    }

    public function testMacAddress()
    {
        $this->assertRegExp('/^([0-9A-F]{2}[:]){5}([0-9A-F]{2})$/i', Internet::macAddress());
    }
}
