<?php

namespace Faker\Test\Provider;

use Faker\Provider\UserAgent;
use PHPUnit\Framework\TestCase;

final class UserAgentTest extends TestCase
{
    public function testRandomUserAgent()
    {
        $this->assertNotNull(UserAgent::userAgent());
    }

    public function testFirefoxUserAgent()
    {
        $this->stringContains(' Firefox/', UserAgent::firefox());
    }

    public function testSafariUserAgent()
    {
        $this->stringContains('Safari/', UserAgent::safari());
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
        $this->stringContains('(KHTML, like Gecko) Chrome/', UserAgent::chrome());
    }
}
