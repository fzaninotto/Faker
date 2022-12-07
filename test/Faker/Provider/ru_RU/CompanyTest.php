<?php

namespace Faker\Test\Provider\ru_RU;

use Faker\Provider\ru_RU\Company;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class CompanyTest extends TestCase
{
    public function testINN(): void
    {
        self::assertMatchesRegularExpression('/^[0-9]{10}$/', $this->faker->inn10);
        self::assertEquals('77', substr($this->faker->inn10('77'), 0, 2));
        self::assertEquals('02', substr($this->faker->inn10(2), 0, 2));
    }

    public function testKPP(): void
    {
        self::assertMatchesRegularExpression('/^[0-9]{9}$/', $this->faker->kpp);
        self::assertEquals('01001', substr($this->faker->kpp, -5, 5));
        $inn10 = $this->faker->inn10;
        self::assertEquals(substr($inn10, 0, 4), substr($this->faker->kpp($inn10), 0, 4));
    }

    public function testCatchPhrase(): void
    {
        $phrase = $this->faker->catchPhrase;
        self::assertNotNull($phrase);
        self::assertGreaterThanOrEqual(
            3,
            count(explode(' ', $this->faker->catchPhrase)),
            "'$phrase' - should be contain 3 word",
        );
    }

    public function checksumProvider()
    {
        return [
            ['143525744', '4'],
            ['500109285', '3'],
            ['500109285', '3'],
            ['500109285', '3'],
            ['027615723', '1'],
        ];
    }

    /**
     * @dataProvider checksumProvider
     */
    public function testInn10Checksum($inn10, $checksum): void
    {
        self::assertSame($checksum, $this->faker->inn10Checksum($inn10), $inn10);
    }

    public function inn10ValidatorProvider()
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
     * @dataProvider inn10ValidatorProvider
     */
    public function testInn10IsValid($inn10, $isValid): void
    {
        self::assertSame($isValid, $this->faker->inn10IsValid($inn10), $inn10);
    }

    protected function getProviders(): iterable
    {
        yield new Company($this->faker);
    }
}
