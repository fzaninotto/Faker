<?php

namespace Faker\Test\Core;

use Faker\Core\Uuid;
use Faker\Test\TestCase;

final class UuidTest extends TestCase
{
    public function testUuidReturnsUuid(): void
    {
        $instance = new Uuid();
        $uuid = $instance->uuid3();
        self::assertTrue($this->isUuid($uuid));
    }

    public function testUuidExpectedSeed(): void
    {
        $instance = new Uuid();

        if (pack('L', 0x6162797A) == pack('N', 0x6162797A)) {
            self::markTestSkipped('Big Endian');
        }
        $this->faker->seed(123);
        self::assertEquals('8e2e0c84-50dd-367c-9e66-f3ab455c78d6', $instance->uuid3());
        self::assertEquals('073eb60a-902c-30ab-93d0-a94db371f6c8', $instance->uuid3());
    }

    protected function isUuid(string $uuid)
    {
        return is_string($uuid) && (bool) preg_match(
            '/^[a-f0-9]{8,8}-(?:[a-f0-9]{4,4}-){3,3}[a-f0-9]{12,12}$/i',
            $uuid,
        );
    }
}
