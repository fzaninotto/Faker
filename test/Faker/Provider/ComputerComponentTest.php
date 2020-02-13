<?php

namespace Faker\Test\Provider;

use Faker\Provider\ComputerComponents;
use PHPUnit\Framework\TestCase;

final class ComputerComponentTest extends TestCase
{
	public function testRandomComponent()
	{
		$this->assertNotEmpty(ComputerComponents::computerComponents());
	}

	public function testRandomRamModule()
	{
		$this->assertNotEmpty(ComputerComponents::ram());
	}
}