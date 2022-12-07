<?php

namespace Faker\Test\Provider;

use Faker\Provider\Uuid as BaseProvider;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class UuidTest extends TestCase
{
    public function testUuidReturnsUuid(): void
    {
        $uuid = BaseProvider::uuid();
        self::assertTrue($this->isUuid($uuid));
    }

    public function testUuidExpectedSeed(): void
    {
        if (pack('L', 0x6162797A) == pack('N', 0x6162797A)) {
            self::markTestSkipped('Big Endian');
        }
        $this->faker->seed(123);
        self::assertEquals('8e2e0c84-50dd-367c-9e66-f3ab455c78d6', BaseProvider::uuid());
        self::assertEquals('073eb60a-902c-30ab-93d0-a94db371f6c8', BaseProvider::uuid());
    }

    protected function isUuid($uuid)
    {
        return is_string($uuid) && (bool) preg_match('/^[a-f0-9]{8,8}-(?:[a-f0-9]{4,4}-){3,3}[a-f0-9]{12,12}$/i', $uuid);
    }
}
