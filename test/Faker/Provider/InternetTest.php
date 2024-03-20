<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Company;
use Faker\Provider\Internet;
use Faker\Provider\Lorem;
use Faker\Provider\Person;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class InternetTest extends TestCase
{
    private Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Lorem($faker));
        $faker->addProvider(new Person($faker));
        $faker->addProvider(new Internet($faker));
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    public static function localeDataProvider(): array
    {
        $providerPath = \realpath(__DIR__.'/../../../src/Faker/Provider');
        $localePaths = \array_filter(\glob($providerPath.'/*', \GLOB_ONLYDIR));
        $locales = [];
        foreach ($localePaths as $path) {
            $parts = \explode('/', $path);
            $locales[] = [$parts[\count($parts) - 1]];
        }

        return $locales;
    }

    /**
     * @see http://stackoverflow.com/questions/12026842/how-to-validate-an-email-address-in-php
     */
    #[DataProvider('localeDataProvider')]
    public function testEmailIsValid(string $locale): void
    {
        if ('en_US' !== $locale && !\class_exists('Transliterator')) {
            $this->markTestSkipped('Transliterator class not available (intl extension)');
        }

        $this->loadLocalProviders($locale);
        $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
        $emailAddress = $this->faker->email();
        $this->assertMatchesRegularExpression($pattern, $emailAddress);
    }

    #[DataProvider('localeDataProvider')]
    public function testUsernameIsValid($locale): void
    {
        if ('en_US' !== $locale && !\class_exists('Transliterator')) {
            $this->markTestSkipped('Transliterator class not available (intl extension)');
        }

        $this->loadLocalProviders($locale);
        $pattern = '/^[A-Za-z0-9]+([._][A-Za-z0-9]+)*$/';
        $username = $this->faker->username();
        $this->assertMatchesRegularExpression($pattern, $username);
    }

    #[DataProvider('localeDataProvider')]
    public function testDomainnameIsValid($locale): void
    {
        if ('en_US' !== $locale && !\class_exists('Transliterator')) {
            $this->markTestSkipped('Transliterator class not available (intl extension)');
        }

        $this->loadLocalProviders($locale);
        $pattern = '/^[a-z]+(\.[a-z]+)+$/';
        $domainName = $this->faker->domainName();
        $this->assertMatchesRegularExpression($pattern, $domainName);
    }

    #[DataProvider('localeDataProvider')]
    public function testDomainwordIsValid($locale): void
    {
        if ('en_US' !== $locale && !\class_exists('Transliterator')) {
            $this->markTestSkipped('Transliterator class not available (intl extension)');
        }

        $this->loadLocalProviders($locale);
        $pattern = '/^[a-z]+$/';
        $domainWord = $this->faker->domainWord();
        $this->assertMatchesRegularExpression($pattern, $domainWord);
    }

    public function loadLocalProviders(string $locale): void
    {
        $providerPath = \realpath(__DIR__.'/../../../src/Faker/Provider');
        if (\file_exists($providerPath.'/'.$locale.'/Internet.php')) {
            $internet = "\\Faker\\Provider\\$locale\\Internet";
            $this->faker->addProvider(new $internet($this->faker));
        }
        if (\file_exists($providerPath.'/'.$locale.'/Person.php')) {
            $person = "\\Faker\\Provider\\$locale\\Person";
            $this->faker->addProvider(new $person($this->faker));
        }
        if (\file_exists($providerPath.'/'.$locale.'/Company.php')) {
            $company = "\\Faker\\Provider\\$locale\\Company";
            $this->faker->addProvider(new $company($this->faker));
        }
    }

    public function testPasswordIsValid(): void
    {
        $this->assertMatchesRegularExpression('/^.{6}$/', $this->faker->password(6, 6));
    }

    public function testSlugIsValid(): void
    {
        $pattern = '/^[a-z0-9-]+$/';
        $slug = $this->faker->slug();
        $this->assertSame(\preg_match($pattern, $slug), 1);
    }

    public function testUrlIsValid(): void
    {
        $url = $this->faker->url();
        $this->assertNotFalse(\filter_var($url, \FILTER_VALIDATE_URL));
    }

    public function testLocalIpv4(): void
    {
        $this->assertNotFalse(\filter_var(Internet::localIpv4(), \FILTER_VALIDATE_IP, \FILTER_FLAG_IPV4));
    }

    public function testIpv4(): void
    {
        $this->assertNotFalse(\filter_var($this->faker->ipv4(), \FILTER_VALIDATE_IP, \FILTER_FLAG_IPV4));
    }

    public function testIpv4NotLocalNetwork(): void
    {
        $this->assertDoesNotMatchRegularExpression('/\A0\./', $this->faker->ipv4());
    }

    public function testIpv4NotBroadcast(): void
    {
        $this->assertNotEquals('255.255.255.255', $this->faker->ipv4());
    }

    public function testIpv6(): void
    {
        $this->assertNotFalse(\filter_var($this->faker->ipv6(), \FILTER_VALIDATE_IP, \FILTER_FLAG_IPV6));
    }

    public function testMacAddress(): void
    {
        $this->assertMatchesRegularExpression('/^([0-9A-F]{2}[:]){5}([0-9A-F]{2})$/i', Internet::macAddress());
    }
}
