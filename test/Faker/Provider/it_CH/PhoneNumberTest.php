<?php

namespace Faker\Test\Provider\it_CH;

use Faker\Generator;
use Faker\Provider\it_CH\PhoneNumber;
use PHPUnit\Framework\TestCase;

final class PhoneNumberTest extends TestCase
{

    /**
     * @var Faker\Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testPhoneNumber()
    {
        $this->assertRegExp('/^0\d{2} ?\d{3} ?\d{2} ?\d{2}|\+41 ?(\(0\))?\d{2} ?\d{3} ?\d{2} ?\d{2}$/', $this->faker->phoneNumber());
    }

    public function testMobileNumber()
    {
        $this->assertRegExp('/^07[56789] ?\d{3} ?\d{2} ?\d{2}$/', $this->faker->mobileNumber());
    }
}
