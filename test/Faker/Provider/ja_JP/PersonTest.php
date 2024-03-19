<?php

namespace Faker\Test\Provider\ja_JP;

use Faker\Generator;
use Faker\Provider\ja_JP\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    public function testKanaNameMaleReturns(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('アオタ ミノル', $faker->kanaName('male'));
    }

    public function testKanaNameFemaleReturns(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('アオタ ミキ', $faker->kanaName('female'));
    }

    public function testFirstKanaNameMaleReturns(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('ヒデキ', $faker->firstKanaName('male'));
    }

    public function testFirstKanaNameFemaleReturns(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('マアヤ', $faker->firstKanaName('female'));
    }

    public function testLastKanaNameReturnsNakajima(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('ナカジマ', $faker->lastKanaName);
    }
}
