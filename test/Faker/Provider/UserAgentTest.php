<?php

namespace Faker\Test\Provider;

use Faker\Provider\UserAgent;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class UserAgentTest extends TestCase
{
    public function testAllAgents(): void
    {
        $agent = new UserAgent($this->faker);
        $reflection = new \ReflectionClass($agent);
        $agents = $reflection->getProperty('userAgents');
        $agents->setAccessible(true);

        foreach ($agents->getValue() as $method) {
            self::assertNotNull(UserAgent::$method());
        }
    }

    public function testRandomUserAgent(): void
    {
        self::assertNotNull(UserAgent::userAgent());
    }

    public function testFirefoxUserAgent(): void
    {
        self::assertStringContainsString(' Firefox/', UserAgent::firefox());
    }

    public function testSafariUserAgent(): void
    {
        self::assertStringContainsString('Safari/', UserAgent::safari());
    }

    public function testInternetExplorerUserAgent(): void
    {
        self::assertStringStartsWith('Mozilla/5.0 (compatible; MSIE ', UserAgent::internetExplorer());
    }

    public function testOperaUserAgent(): void
    {
        self::assertStringStartsWith('Opera/', UserAgent::opera());
    }

    public function testChromeUserAgent(): void
    {
        self::assertStringContainsString('(KHTML, like Gecko) Chrome/', UserAgent::chrome());
    }

    public function testMSEdgeUserAgent(): void
    {
        self::assertStringContainsString('Edg', UserAgent::msedge());
    }
}
