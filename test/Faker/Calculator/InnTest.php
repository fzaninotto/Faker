<?php

namespace Faker\Test\Calculator;

use Faker\Calculator\Inn;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class InnTest extends TestCase
{
    public static function checksumProvider(): array
    {
        return [
            ['143525744', '4'],
            ['500109285', '3'],
            ['500109285', '3'],
            ['500109285', '3'],
            ['027615723', '1'],
        ];
    }

    #[DataProvider('checksumProvider')]
    public function testChecksum($inn, $checksum): void
    {
        $this->assertEquals($checksum, Inn::checksum($inn), $inn);
    }

    public static function validatorProvider(): array
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

    #[DataProvider('validatorProvider')]
    public function testIsValid($inn, $isValid): void
    {
        $this->assertEquals($isValid, Inn::isValid($inn), $inn);
    }
}
