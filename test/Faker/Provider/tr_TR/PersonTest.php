<?php

namespace Faker\Test\Provider\tr_TR;

use Faker\Provider\tr_TR\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testTCNo(): void
    {
        for ($i = 0; $i < 100; ++$i) {
            $number = $this->faker->tcNo;

            self::assertEquals(11, strlen($number));
            self::assertTrue($this->faker->tcNoisValid($number));
        }
    }

    public function tcNoChecksumProvider()
    {
        return [
            ['553006348', '82'],
            ['350630743', '78'],
            ['550600932', '88'],
            ['487932947', '70'],
            ['168113862', '40'],
        ];
    }

    /**
     * @dataProvider tcNoChecksumProvider
     *
     * @param string $tcNo
     * @param string $checksum
     */
    public function testTcNoChecksum($tcNo, $checksum): void
    {
        self::assertSame($checksum, $this->faker->tcNoChecksum($tcNo), $tcNo);
    }

    public function tcNoValidatorProvider()
    {
        return [
            ['22978160678', true],
            ['26480045324', true],
            ['47278360658', true],
            ['34285002510', true],
            ['19874561012', true],

            ['11111111111', false],
            ['11234567899', false],
        ];
    }

    /**
     * @dataProvider tcNoValidatorProvider
     *
     * @param string $tcNo
     * @param bool   $isValid
     */
    public function testIsValid($tcNo, $isValid): void
    {
        self::assertSame($isValid, $this->faker->tcNoisValid($tcNo), $tcNo);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
