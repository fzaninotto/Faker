<?php

namespace Faker\Test;

use Faker\Generator;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * @var Generator
     */
    protected $faker;

    protected function setUp(): void
    {
        $this->faker = new Generator();
        $this->faker->seed(1);

        foreach ($this->getProviders() as $provider) {
            $this->faker->addProvider($provider);
        }
    }

    public static function localeDataProvider(): array
    {
        $locales = [];

        foreach (self::getAllLocales() as $locale) {
            $locales[$locale] = [$locale];
        }

        return $locales;
    }

    protected static function getAllLocales(): array
    {
        return array_map('basename', glob(__DIR__ . '/../../src/Faker/Provider/*_*', GLOB_ONLYDIR));
    }

    protected function loadLocalProvider(string $locale, string $provider): void
    {
        $providerClass = "\\Faker\\Provider\\$locale\\$provider";

        if (class_exists($providerClass)) {
            $this->faker->addProvider(new $providerClass($this->faker));
        }
    }

    protected function getProviders(): iterable
    {
        return [];
    }
}
