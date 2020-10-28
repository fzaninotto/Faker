<?php

namespace Faker\Test\Provider;

use Faker\Provider\UserAgent;
use Faker\Test\TestCase;

final class UserAgentTest extends TestCase
{
    public function testRandomUserAgent()
    {
        $this->assertNotNull(UserAgent::userAgent());
    }

    public function testFirefoxUserAgent()
    {
        $this->assertStringContainsString(' Firefox/', UserAgent::firefox());
    }

    public function testSafariUserAgent()
    {
        $this->assertStringContainsString('Safari/', UserAgent::safari());
    }

    public function testInternetExplorerUserAgent()
    {
        $this->assertStringStartsWith('Mozilla/5.0 (compatible; MSIE ', UserAgent::internetExplorer());
    }

    public function testOperaUserAgent()
    {
        $this->assertStringStartsWith('Opera/', UserAgent::opera());
    }

    public function testChromeUserAgent()
    {
        $this->assertStringContainsString('(KHTML, like Gecko) Chrome/', UserAgent::chrome());
    }
}
