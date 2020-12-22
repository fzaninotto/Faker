<?php

namespace Faker\Test\Extension;

use Faker\Extension\Extension;
use Faker\Extension\GeneratorAwareExtensionTrait;
use Faker\Generator;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Faker\Extension\GeneratorAwareExtensionTrait
 */
final class GeneratorAwareExtensionTest extends TestCase
{
    public function testWithGeneratorClonesExtensionAndSetsGenerator(): void
    {
        $generator = new Generator();

        $extension = new class() implements Extension {
            use GeneratorAwareExtensionTrait;

            public function generator(): Generator
            {
                return $this->generator;
            }
        };

        $mutated = $extension->withGenerator($generator);

        self::assertNotSame($mutated, $extension);
        self::assertSame($generator, $mutated->generator());
    }
}
