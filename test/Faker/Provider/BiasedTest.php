<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Biased;
use PHPUnit\Framework\TestCase;

final class BiasedTest extends TestCase
{
    public const MAX = 10;
    public const NUMBERS = 250;
    protected Generator $generator;
    protected array $results = [];

    protected function setUp(): void
    {
        self::markTestSkipped();
        $this->generator = new Generator();
        $this->generator->addProvider(new Biased($this->generator));

        $this->results = \array_fill(1, self::MAX, 0);
    }

    public function performFake($function): void
    {
        for ($i = 0; $i < self::NUMBERS; ++$i) {
            ++$this->results[$this->generator->biasedNumberBetween(1, self::MAX, $function)];
        }
    }

    public function testUnbiased(): void
    {
        $this->performFake([Biased::class, 'unbiased']);

        // assert that all numbers are near the expected unbiased value
        foreach ($this->results as $number => $amount) {
            // integral
            $assumed = (1 / self::MAX * $number) - (1 / self::MAX * ($number - 1));
            // calculate the fraction of the whole area
            $assumed /= 1;
            $this->assertGreaterThan(self::NUMBERS * $assumed * .95, $amount, 'Value was more than 5 percent under the expected value');
            $this->assertLessThan(self::NUMBERS * $assumed * 1.05, $amount, 'Value was more than 5 percent over the expected value');
        }
    }

    public function testLinearHigh(): void
    {
        $this->performFake([Biased::class, 'linearHigh']);

        foreach ($this->results as $number => $amount) {
            // integral
            $assumed = 0.5 * (1 / self::MAX * $number) ** 2 - 0.5 * (1 / self::MAX * ($number - 1)) ** 2;
            // calculate the fraction of the whole area
            $assumed /= 1 ** 2 * .5;
            $this->assertGreaterThan(self::NUMBERS * $assumed * .9, $amount, 'Value was more than 10 percent under the expected value');
            $this->assertLessThan(self::NUMBERS * $assumed * 1.1, $amount, 'Value was more than 10 percent over the expected value');
        }
    }

    public function testLinearLow(): void
    {
        $this->performFake([Biased::class, 'linearLow']);

        foreach ($this->results as $number => $amount) {
            // integral
            $assumed = -0.5 * (1 / self::MAX * $number) ** 2 - -0.5 * (1 / self::MAX * ($number - 1)) ** 2;
            // shift the graph up
            $assumed += 1 / self::MAX;
            // calculate the fraction of the whole area
            $assumed /= 1 ** 2 * .5;
            $this->assertGreaterThan(self::NUMBERS * $assumed * .9, $amount, 'Value was more than 10 percent under the expected value');
            $this->assertLessThan(self::NUMBERS * $assumed * 1.1, $amount, 'Value was more than 10 percent over the expected value');
        }
    }
}
