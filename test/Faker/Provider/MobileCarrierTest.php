<?php

namespace Faker\Test\Provider;

use Faker\Provider\MobileCarrier;
use Faker\Generator;
use PHPUnit\Framework\TestCase;

class MobileCarrierTest extends TestCase
{

	private $faker;

	public function setUp()
	{
		$faker = new Generator();
		$faker->addProvider(new MobileCarrier($faker));
		$this->faker = $faker;
	}

	public function testMobileCarrier()
	{
		$mobileCarrier = $this->faker->carrier();
		$this->assertNotEmpty($mobileCarrier, "Empty result returned by formatter: " . PHP_EOL);
	}

}
