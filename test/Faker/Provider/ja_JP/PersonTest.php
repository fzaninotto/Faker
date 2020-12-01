<?php

namespace Faker\Test\Provider\ja_JP;

use Faker\Generator;
use Faker\Provider\ja_JP\Person;
use Faker\Test\TestCase;

final class PersonTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);
        $this->faker = $faker;
    }

    public function testKanaNameMaleReturns()
    {
        $this->assertEquals('アオタ ミノル', $this->faker->kanaName('male'));
    }

    public function testKanaNameFemaleReturns()
    {
        $this->assertEquals('アオタ ミキ', $this->faker->kanaName('female'));
    }

    public function testFirstKanaNameMaleReturns()
    {
        $this->assertEquals('ヒデキ', $this->faker->firstKanaName('male'));
    }

    public function testFirstKanaNameFemaleReturns()
    {
        $this->assertEquals('マアヤ', $this->faker->firstKanaName('female'));
    }

    public function testLastKanaNameReturnsNakajima()
    {
        $this->assertEquals('ナカジマ', $this->faker->lastKanaName);
    }
}
