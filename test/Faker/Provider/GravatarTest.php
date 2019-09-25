<?php

namespace Faker\Test\Provider;

use Faker\Provider\Gravatar;
use PHPUnit\Framework\TestCase;

class GravatarTest extends TestCase
{
    public function testDefaultUrlValues()
    {
        $this->assertRegExp('#^https://www\.gravatar\.com/avatar/\d+\.jpg\?d=retro&size=80#', Gravatar::gravatarUrl());
    }

    public function testGravatarUrlAcceptsCustomMode()
    {
        $this->assertRegExp('#^https://www\.gravatar\.com/avatar/\d+\.jpg\?d=mp&size=80#', Gravatar::gravatarUrl('mp'));
    }

    public function testGravatarUrlAcceptsCustomSize()
    {
        $this->assertRegExp('#^https://www\.gravatar\.com/avatar/\d+\.jpg\?d=retro&size=200#', Gravatar::gravatarUrl(null, null, 200));
    }

    public function testGravatarUrlAcceptsCustomEmail()
    {
        $email = 'TeSt@EmAiL.OK';
        $hash = md5(strtolower($email));

        $this->assertRegExp("#^https://www\.gravatar\.com/avatar/${hash}\.jpg\?d=retro&size=80#", Gravatar::gravatarUrl(null, $email));
    }

    public function testDownloadWithDefaults()
    {
        $curlPing = curl_init('https://www.gravatar.com');

        curl_setopt($curlPing, CURLOPT_TIMEOUT, 5);
        curl_setopt($curlPing, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($curlPing, CURLOPT_RETURNTRANSFER, true);

        curl_exec($curlPing);

        $httpCode = curl_getinfo($curlPing, CURLINFO_HTTP_CODE);

        curl_close($curlPing);

        if ($httpCode < 200 | $httpCode > 300) {
            $this->markTestSkipped('Gravatar is offline, skipping image download');
        }

        $file = Gravatar::gravatar();

        $this->assertFileExists($file);

        $this->assertEquals('jpg', pathinfo($file, PATHINFO_EXTENSION));

        if (file_exists($file)) {
            unlink($file);
        }
    }
}
