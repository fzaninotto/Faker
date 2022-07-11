<?php

namespace Faker\Test\Provider;

use Faker\Factory;
use PHPUnit\Framework\TestCase;

final class LocalizationTest extends TestCase
{
    public function testLocalizedNameProvidersDoNotThrowErrors()
    {
        foreach (glob(__DIR__ . '/../../../src/Faker/Provider/*/Person.php') as $localizedPerson) {
            preg_match('#/([a-zA-Z_]+)/Person\.php#', $localizedPerson, $matches);
            $faker = Factory::create($matches[1]);
            $this->assertNotNull($faker->name(), 'Localized Name Provider ' . $matches[1] . ' does not throw errors');
        }
    }

    public function testLocalizedAddressProvidersDoNotThrowErrors()
    {
        foreach (glob(__DIR__ . '/../../../src/Faker/Provider/*/Address.php') as $localizedAddress) {
            preg_match('#/([a-zA-Z_]+)/Address\.php#', $localizedAddress, $matches);
            $faker = Factory::create($matches[1]);
            $this->assertNotNull($faker->address(), 'Localized Address Provider ' . $matches[1] . ' does not throw errors');
        }
    }
}
