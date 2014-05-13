<?php

namespace Faker\Test\Provider;

use Faker\Factory;

class LocalizationTest extends \PHPUnit_Framework_TestCase
{
    public function testLocalizedNameProvidersDoNotThrowErrors()
    {
        foreach (glob(__DIR__ . '/../../../src/Faker/Provider/*/Person.php') as $localizedPerson) {
            preg_match('#/([a-zA-Z]+)/Person\.php#', $localizedPerson, $matches);
            $locale = preg_replace('#([a-z])([A-Z])#', "$1_$2", $matches[1]);
            $faker = Factory::create($locale);
            $this->assertNotNull($faker->name(), 'Localized Name Provider ' . $locale . ' does not throw errors');
        }
    }

    public function testLocalizedAddressProvidersDoNotThrowErrors()
    {
        foreach (glob(__DIR__ . '/../../../src/Faker/Provider/*/Address.php') as $localizedAddress) {
            preg_match('#/([a-zA-Z]+)/Address\.php#', $localizedAddress, $matches);
            $locale = preg_replace('#([a-z])([A-Z])#', "$1_$2", $matches[1]);
            $faker = Factory::create($locale);
            $this->assertNotNull($faker->address(), 'Localized Address Provider ' . $locale . ' does not throw errors');
        }
    }
}
