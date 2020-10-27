<?php

namespace Faker\Test\Provider\ar_DZ;

use Faker\Generator;
use Faker\Provider\ar_DZ\PhoneNumber;
use PHPUnit\Framework\TestCase;

final class PhoneNumberTest extends TestCase
{
    /**
     * @var Generator
     */

    private $faker;
    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testPhoneNumberIsValidForAlgeria()
    {
        $phoneNumber = $this->faker->phoneNumber();
        $this->assertNotNull($phoneNumber);
    }
}
