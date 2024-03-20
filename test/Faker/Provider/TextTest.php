<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\en_US\Text;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class TextTest extends TestCase
{
    private Generator $generator;

    /**
     * @before
     */
    public function buildGenerator(): void
    {
        $generator = new Generator();
        $generator->addProvider(new Text($generator));
        $generator->seed(0);

        $this->generator = $generator;
    }

    #[DataProvider('data')]
    public function testTextMaxLength($length): void
    {
        $this->assertLessThan($length, \strlen($this->generator->realText($length)));
    }

    public static function data(): array
    {
        return [
            [10],
            [20],
            [50],
            [70],
            [90],
            [120],
            [150],
            [200],
            [500],
        ];
    }

    public function testTextMaxIndex(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->generator->realText(200, 11);

        $this->fail('The index should be less than or equal to 5.');
    }

    public function testTextMinIndex(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->generator->realText(200, 0);

        $this->fail('The index should be greater than or equal to 1.');
    }

    public function testTextMinLength(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->generator->realText(9);

        $this->fail('The text should be at least 10 characters.');
    }
}
