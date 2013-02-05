<?php

namespace Faker\Test\Provider;

use Faker\Provider\Uuid as BaseProvider;

class UuidTest extends \PHPUnit_Framework_TestCase
{
    public function testUuidReturnsUuid()
    {
        $uuid = BaseProvider::uuid();
        $this->assertTrue($this->isUuid($uuid));
    }

    public function testUuidExpectedSeed()
    {
        mt_srand(123);
        $this->assertEquals("8eea2b29-832f-3633-985c-b2a257eabb5a", BaseProvider::uuid());
        $this->assertEquals("9424cf48-58b3-3b7d-b89f-c049e9f5d31f", BaseProvider::uuid());
    }

    protected function isUuid($uuid)
    {
        return is_string($uuid) && (bool) preg_match('/^[a-f0-9]{8,8}-(?:[a-f0-9]{4,4}-){3,3}[a-f0-9]{12,12}$/i', $uuid);
    }
}
