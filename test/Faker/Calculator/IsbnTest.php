<?php

namespace Faker\Test\Calculator;

use Faker\Calculator\Isbn;
use Faker\Test\TestCase;

final class IsbnTest extends TestCase
{
    public function isbnChecksumProvider(): iterable
    {
        yield ['997150210', '0'];

        yield ['999215810', '7'];

        yield ['960425059', '0'];
    }

    public function isbnValidationProvider(): iterable
    {
        yield ['9971502100', true];

        yield ['0754013235', true];

        yield ['093583933X', true];

        yield ['0935839330', false];

        yield ['1434856045', false];

        yield ['143485604', false];

        yield ['093583933A', false];
    }

    /**
     * @dataProvider isbnChecksumProvider
     */
    public function testChecksumIsbn(string $partial, string $checksum): void
    {
        self::assertSame($checksum, Isbn::checksum($partial));
    }

    public function testInvalidChecksumIsbn(): void
    {
        $this->expectException(\LengthException::class);
        Isbn::checksum('9971502100');
    }

    /**
     * @dataProvider isbnValidationProvider
     */
    public function testIsbnValidation(string $isbn, bool $valid): void
    {
        self::assertSame($valid, Isbn::isValid($isbn));
    }
}
