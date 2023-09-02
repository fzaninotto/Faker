<?php

namespace Faker\Test;

use Faker\Extension\NumberExtension;

/**
 * @covers \Faker\UniqueGenerator
 */
final class UniqueGeneratorTest extends TestCase
{
    public function testUniqueGeneratorKeepsUniquesAcrossExtensions(): void
    {
        $this->expectException(\OverflowException::class);

        for ($i = 0; $i < 3; ++$i) {
            $this->faker->unique()->ext(NumberExtension::class)->numberBetween(0, 1);
        }
    }

    public function testUniqueGeneratorRetries(): void
    {
        for ($i = 0; $i < 10; ++$i) {
            $this->faker->unique()->ext(NumberExtension::class)->numberBetween(0, 9);
        }

        $this->addToAssertionCount(1);
    }
}
