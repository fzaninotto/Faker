<?php

namespace Faker\Test\Provider;

use Faker\Calculator\Luhn;
use Faker\Generator;
use Faker\Provider\Base as BaseProvider;
use Faker\Provider\Finance as FinanceProvider;

class FinanceTest extends \PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new BaseProvider($faker));
        $faker->addProvider(new FinanceProvider($faker));
        $this->faker = $faker;
    }

    public function localeDataProvider()
    {
        $providerPath = realpath(__DIR__ . '/../../../src/Faker/Provider');
        $localePaths = array_filter(glob($providerPath . '/*', GLOB_ONLYDIR));
        foreach ($localePaths as $path) {
            $parts = explode('/', $path);
            $locales[] = array($parts[count($parts) - 1]);
        }

        return $locales;
    }

    public function loadLocalProviders($locale)
    {
        $providerPath = realpath(__DIR__ . '/../../../src/Faker/Provider');
        if (file_exists($providerPath.'/'.$locale.'/Finance.php')) {
            $finance = "\\Faker\\Provider\\$locale\\Finance";
            $this->faker->addProvider(new $finance($this->faker));
        }
    }

    public function testIsinReturnsValidIsinNumberByDefault()
    {
        $isin = $this->faker->isin();
        $this->assertSame(12, strlen($isin));
        $this->assertRegExp('/^[A-Z]{2}$/', substr($isin, 0, 2));
        $this->assertTrue(Luhn::isValid($isin));
    }

}
