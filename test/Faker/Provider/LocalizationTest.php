<?php

namespace Faker\Test\Provider;

use Faker\Factory;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class LocalizationTest extends TestCase
{
    /**
     * @dataProvider localeDataProvider
     */
    public function testLocalizedProvidersDoNotThrowErrors(string $locale): void
    {
        $faker = Factory::create($locale);
        self::assertNotNull($faker->name, 'Localized Name Provider ' . $locale . ' does not throw errors');
        self::assertNotNull($faker->address, 'Localized Address Provider ' . $locale . ' does not throw errors');
    }
}
