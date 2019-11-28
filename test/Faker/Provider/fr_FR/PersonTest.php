<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Generator;
use Faker\Provider\fr_FR\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testNIRReturnsTheRightGender()
    {
		$nir = $this->faker->nir(\Faker\Provider\Person::GENDER_MALE);
		$this->assertStringStartsWith('1', $nir);
    }

	public function testNIRReturnsTheRightPattern()
    {
		$nir = $this->faker->nir;
		$this->assertRegExp("/^[12]\d{5}[0-9A-B]\d{8}$/", $nir);
	}

	public function testNIRFormattedReturnsTheRightPattern()
    {
		$nir = $this->faker->nir(null, true);
		$this->assertRegExp("/^[12]\s\d{2}\s\d{2}\s\d{1}[0-9A-B]\s\d{3}\s\d{3}\s\d{2}$/", $nir);
	}
}
