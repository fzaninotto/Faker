<?php

namespace Faker\Test\Provider;

use Faker\Provider\en_US\Text;
use Faker\Test\TestCase;

final class TextTest extends TestCase
{
    /**
     * @testWith [10]
     *           [20]
     *           [50]
     *           [70]
     *           [90]
     *           [120]
     *           [150]
     *           [200]
     *           [500]
     */
    public function testTextMaxLength($length)
    {
        self::assertLessThan($length, strlen($this->faker->realText($length)));
    }

    public function testTextMaxIndex()
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->faker->realText(200, 11);

        self::fail('The index should be less than or equal to 5.');
    }

    public function testTextMinIndex()
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->faker->realText(200, 0);

        self::fail('The index should be greater than or equal to 1.');
    }

    public function testTextMinLength()
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->faker->realText(9);

        self::fail('The text should be at least 10 characters.');
    }

    protected function getProviders(): iterable
    {
        yield new Text($this->faker);
    }
}
