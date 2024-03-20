<?php

namespace Faker\Test\Provider;

use Faker\Provider\UserAgent;
use PHPUnit\Framework\TestCase;

final class UserAgentTest extends TestCase
{
    public function testRandomUserAgent(): void
    {
        $this->assertNotNull(UserAgent::userAgent());
    }

    public function testFirefoxUserAgent(): void
    {
        $this->assertStringContainsStringIgnoringCase(' Firefox/', UserAgent::firefox());
    }

    public function testSafariUserAgent(): void
    {
        $this->assertStringContainsStringIgnoringCase('Safari/', UserAgent::safari());
    }

    public function testInternetExplorerUserAgent(): void
    {
        $this->assertStringStartsWith('Mozilla/5.0 (compatible; MSIE ', UserAgent::internetExplorer());
    }

    public function testOperaUserAgent(): void
    {
        $this->assertStringStartsWith('Opera/', UserAgent::opera());
    }

    public function testChromeUserAgent(): void
    {
        $this->assertStringContainsStringIgnoringCase('(KHTML, like Gecko) Chrome/', UserAgent::chrome());
    }
}
