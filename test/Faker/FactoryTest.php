<?php

namespace Faker\Test;

use Faker\Factory;
use Faker\Generator;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    public function testDeveloperCanOverrideFactoryGenerator()
    {
        $generator = FooBarFactory::create();
        $this->assertInstanceOf('\Faker\Test\FooBarGenerator', $generator);
    }
}

final class FooBarGenerator extends Generator
{
}

final class FooBarFactory extends Factory
{
    protected static function createGeneratorInstance()
    {
        return new FooBarGenerator();
    }
}
