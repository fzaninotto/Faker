<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Company;
use Faker\Provider\Internet;
use Faker\Provider\Lorem;
use Faker\Provider\Person;
use Faker\Test\TestCase;

final class InternetTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Lorem($faker));
        $faker->addProvider(new Person($faker));
        $faker->addProvider(new Internet($faker));
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    public function localeDataProvider()
    {
        $providerPath = realpath(__DIR__ . '/../../../src/Faker/Provider');
        $localePaths = array_filter(glob($providerPath . '/*', GLOB_ONLYDIR));
        $locales = [];
        foreach ($localePaths as $path) {
            $parts = explode('/', $path);
            $locales[] = array($parts[count($parts) - 1]);
        }

        return $locales;
    }

    /**
     * @dataProvider localeDataProvider
     */
    public function testEmailIsValid($locale)
    {
        $this->loadLocalProviders($locale);
        $this->assertNotFalse(filter_var($this->faker->email(), FILTER_VALIDATE_EMAIL));
    }

    /**
     * @dataProvider localeDataProvider
     */
    public function testUsernameIsValid($locale)
    {
        $this->loadLocalProviders($locale);
        $pattern = '/^[A-Za-z0-9]+([._][A-Za-z0-9]+)*$/';
        $username = $this->faker->username();
        $this->assertMatchesRegularExpression($pattern, $username);
    }

    /**
     * @dataProvider localeDataProvider
     */
    public function testDomainnameIsValid($locale)
    {
        $this->loadLocalProviders($locale);
        $pattern = '/^[a-z]+(\.[a-z]+)+$/';
        $domainName = $this->faker->domainName();
        $this->assertMatchesRegularExpression($pattern, $domainName);
    }

    /**
     * @dataProvider localeDataProvider
     */
    public function testDomainwordIsValid($locale)
    {
        $this->loadLocalProviders($locale);
        $pattern = '/^[a-z]+$/';
        $domainWord = $this->faker->domainWord();
        $this->assertMatchesRegularExpression($pattern, $domainWord);
    }

    public function loadLocalProviders($locale)
    {
        $providerPath = realpath(__DIR__ . '/../../../src/Faker/Provider');
        if (file_exists($providerPath.'/'.$locale.'/Internet.php')) {
            $internet = "\\Faker\\Provider\\$locale\\Internet";
            $this->faker->addProvider(new $internet($this->faker));
        }
        if (file_exists($providerPath.'/'.$locale.'/Person.php')) {
            $person = "\\Faker\\Provider\\$locale\\Person";
            $this->faker->addProvider(new $person($this->faker));
        }
        if (file_exists($providerPath.'/'.$locale.'/Company.php')) {
            $company = "\\Faker\\Provider\\$locale\\Company";
            $this->faker->addProvider(new $company($this->faker));
        }
    }

    public function testPasswordIsValid()
    {
        $this->assertMatchesRegularExpression('/^.{6}$/', $this->faker->password(6, 6));
    }

    public function testSlugIsValid()
    {
        $pattern = '/^[a-z0-9-]+$/';
        $slug = $this->faker->slug();
        $this->assertSame(preg_match($pattern, $slug), 1);
    }

    public function testUrlIsValid()
    {
        $this->assertNotFalse(filter_var($this->faker->url(), FILTER_VALIDATE_URL));
    }

    public function testLocalIpv4()
    {
        $this->assertNotFalse(filter_var($this->faker->localIpv4(), FILTER_VALIDATE_IP, FILTER_FLAG_IPV4));
    }

    public function testIpv4()
    {
        $this->assertNotFalse(filter_var($this->faker->ipv4(), FILTER_VALIDATE_IP, FILTER_FLAG_IPV4));
    }

    public function testIpv4NotLocalNetwork()
    {
        $this->assertDoesNotMatchRegularExpression('/\A0\./', $this->faker->ipv4());
    }

    public function testIpv4NotBroadcast()
    {
        $this->assertNotEquals('255.255.255.255', $this->faker->ipv4());
    }

    public function testIpv6()
    {
        $this->assertNotFalse(filter_var($this->faker->ipv6(), FILTER_VALIDATE_IP, FILTER_FLAG_IPV6));
    }

    public function testMacAddress()
    {
        $this->assertNotFalse(filter_var($this->faker->macAddress(), FILTER_VALIDATE_MAC));
    }
}
