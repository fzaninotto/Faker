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
        $this->assertEquals("8e2e0c84-50dd-367c-9e66-f3ab455c78d6", BaseProvider::uuid());
        $this->assertEquals("073eb60a-902c-30ab-93d0-a94db371f6c8", BaseProvider::uuid());
    }

    protected function isUuid($uuid)
    {
        return is_string($uuid) && (bool) preg_match('/^[a-f0-9]{8,8}-(?:[a-f0-9]{4,4}-){3,3}[a-f0-9]{12,12}$/i', $uuid);
    }
}
