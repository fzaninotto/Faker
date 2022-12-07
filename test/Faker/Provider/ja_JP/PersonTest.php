<?php

namespace Faker\Test\Provider\ja_JP;

use Faker\Provider\ja_JP\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testKanaNameMaleReturns(): void
    {
        self::assertEquals('アオタ ミノル', $this->faker->kanaName('male'));
    }

    public function testKanaNameFemaleReturns(): void
    {
        self::assertEquals('アオタ ミキ', $this->faker->kanaName('female'));
    }

    public function testFirstKanaNameMaleReturns(): void
    {
        self::assertEquals('ヒデキ', $this->faker->firstKanaName('male'));
    }

    public function testFirstKanaNameFemaleReturns(): void
    {
        self::assertEquals('マアヤ', $this->faker->firstKanaName('female'));
    }

    public function testLastKanaNameReturnsNakajima(): void
    {
        self::assertEquals('ナカジマ', $this->faker->lastKanaName);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
