<?php

namespace Faker\Test\Provider\en_GB;

use Faker\Generator;
use Faker\Provider\en_GB\Person;
use Faker\Test\TestCase;

final class PersonTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testNationalInsuranceNumber()
    {
        $result = $this->faker->nino;

        $this->assertMatchesRegularExpression('/^[A-Z]{2}\d{6}[A-Z]{1}$/', $result);

        $this->assertFalse(in_array($result[0], ['D', 'F', 'I', 'Q', 'U', 'V']));
        $this->assertFalse(in_array($result[1], ['D', 'F', 'I', 'Q', 'U', 'V']));
        $this->assertFalse(in_array($result, ['BG', 'GB', 'NK', 'KN', 'TN', 'NT', 'ZZ']));
        $this->assertFalse($result[0] === 'O');
    }
}
