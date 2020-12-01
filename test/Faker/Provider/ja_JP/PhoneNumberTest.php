<?php

namespace Faker\Test\Provider\ja_JP;

use Faker\Generator;
use Faker\Provider\ja_JP\PhoneNumber;
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

    public function testPhoneNumber()
    {
        for ($i = 0; $i < 10; $i++) {
            $phoneNumber = $this->faker->phoneNumber;
            $this->assertNotEmpty($phoneNumber);
            $this->assertMatchesRegularExpression('/^0\d{1,4}-\d{1,4}-\d{3,4}$/', $phoneNumber);
        }
    }
}
