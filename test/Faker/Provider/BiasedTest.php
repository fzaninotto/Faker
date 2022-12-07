<?php

namespace Faker\Test\Provider;

use Faker\Provider\Biased;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class BiasedTest extends TestCase
{
    public const MAX = 10;
    public const NUMBERS = 25000;
    protected $results = [];

    protected function setUp(): void
    {
        parent::setUp();
        $this->results = array_fill(1, self::MAX, 0);
    }

    public function performFake($function): void
    {
        for ($i = 0; $i < self::NUMBERS; ++$i) {
            ++$this->results[$this->faker->biasedNumberBetween(1, self::MAX, $function)];
        }
    }

    public function testUnbiased(): void
    {
        $this->performFake(['\Faker\Provider\Biased', 'unbiased']);

        // assert that all numbers are near the expected unbiased value
        foreach ($this->results as $number => $amount) {
            // integral
            $assumed = (1 / self::MAX * $number) - (1 / self::MAX * ($number - 1));
            // calculate the fraction of the whole area
            $assumed /= 1;
            self::assertGreaterThan(self::NUMBERS * $assumed * .95, $amount, 'Value was more than 5 percent under the expected value');
            self::assertLessThan(self::NUMBERS * $assumed * 1.05, $amount, 'Value was more than 5 percent over the expected value');
        }
    }

    public function testLinearHigh(): void
    {
        $this->performFake(['\Faker\Provider\Biased', 'linearHigh']);

        foreach ($this->results as $number => $amount) {
            // integral
            $assumed = 0.5 * (1 / self::MAX * $number) ** 2 - 0.5 * (1 / self::MAX * ($number - 1)) ** 2;
            // calculate the fraction of the whole area
            $assumed /= 1 ** 2 * .5;
            self::assertGreaterThan(self::NUMBERS * $assumed * .9, $amount, 'Value was more than 10 percent under the expected value');
            self::assertLessThan(self::NUMBERS * $assumed * 1.1, $amount, 'Value was more than 10 percent over the expected value');
        }
    }

    public function testLinearLow(): void
    {
        $this->performFake(['\Faker\Provider\Biased', 'linearLow']);

        foreach ($this->results as $number => $amount) {
            // integral
            $assumed = -0.5 * (1 / self::MAX * $number) ** 2 - -0.5 * (1 / self::MAX * ($number - 1)) ** 2;
            // shift the graph up
            $assumed += 1 / self::MAX;
            // calculate the fraction of the whole area
            $assumed /= 1 ** 2 * .5;
            self::assertGreaterThan(self::NUMBERS * $assumed * .9, $amount, 'Value was more than 10 percent under the expected value');
            self::assertLessThan(self::NUMBERS * $assumed * 1.1, $amount, 'Value was more than 10 percent over the expected value');
        }
    }

    protected function getProviders(): iterable
    {
        yield new Biased($this->faker);
    }
}
