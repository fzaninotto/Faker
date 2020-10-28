<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Generator;
use Faker\Provider\fr_FR\PhoneNumber;
use Faker\Test\TestCase;

final class PhoneNumberTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testMobileNumber()
    {
        $mobileNumber = $this->faker->mobileNumber();
        $this->assertMatchesRegularExpression('/^(\+33 |\+33 \(0\)|0)(6|7)(?:(\s{1})?\d{2}){4}$/', $mobileNumber);
    }

    public function testMobileNumber07Format()
    {
        $mobileNumberFormat = $this->faker->phoneNumber07();
        $this->assertMatchesRegularExpression('/^([3-9]{1})\d(\d{2}){3}$/', $mobileNumberFormat);
    }

    public function testMobileNumber07WithSeparatorFormat()
    {
        $mobileNumberFormat = $this->faker->phoneNumber07WithSeparator();
        $this->assertMatchesRegularExpression('/^([3-9]{1})\d( \d{2}){3}$/', $mobileNumberFormat);
    }

    public function testServiceNumber()
    {
        $serviceNumber = $this->faker->serviceNumber();
        $this->assertMatchesRegularExpression('/^(\+33 |\+33 \(0\)|0)8(?:(\s{1})?\d{2}){4}$/', $serviceNumber);
    }

    public function testServiceNumberFormat()
    {
        $serviceNumberFormat = $this->faker->phoneNumber08();
        $this->assertMatchesRegularExpression('/^((0|1|2)\d{1}|9[^46])\d{6}$/', $serviceNumberFormat);
    }

    public function testServiceNumberWithSeparatorFormat()
    {
        $serviceNumberFormat = $this->faker->phoneNumber08WithSeparator();
        $this->assertMatchesRegularExpression('/^((0|1|2)\d{1}|9[^46])( \d{2}){3}$/', $serviceNumberFormat);
    }
}
