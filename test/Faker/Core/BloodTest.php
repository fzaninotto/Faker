<?php

declare(strict_types=1);

namespace Faker\Test\Core;

use Faker\Test\TestCase;

final class BloodTest extends TestCase
{
    public function testBloodType(): void
    {
        self::assertContains($this->faker->bloodType(), ['A', 'AB', 'B', 'O']);
    }

    public function testBloodRh(): void
    {
        self::assertContains($this->faker->bloodRh(), ['+', '-']);
    }

    public function testBloodGroup(): void
    {
        self::assertContains($this->faker->bloodGroup(), ['A+', 'A-', 'AB+', 'AB-', 'B+', 'B-', 'O+', 'O-']);
    }
}
