<?php

namespace Faker\Test\Calculator;

use Faker\Calculator\Inn;
use Faker\Test\TestCase;

final class InnTest extends TestCase
{
    public function checksumProvider(): array
    {
        return [
            ['143525744', '4'],
            ['500109285', '3'],
            ['500109285', '3'],
            ['500109285', '3'],
            ['027615723', '1']
        ];
    }

    /**
     * @dataProvider checksumProvider
     */
    public function testChecksum(string $inn, string $checksum): void
    {
        self::assertSame($checksum, Inn::checksum($inn), $inn);
    }

    public function validatorProvider(): array
    {
        return [
            ['5902179757', true],
            ['5408294405', true],
            ['2724164617', true],
            ['0726000515', true],
            ['6312123552', true],
            ['1111111111', false],
            ['0123456789', false],
        ];
    }

    /**
     * @dataProvider validatorProvider
     */
    public function testIsValid(string $inn, bool $isValid): void
    {
        self::assertSame($isValid, Inn::isValid($inn), $inn);
    }
}
