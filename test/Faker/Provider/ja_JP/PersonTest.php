<?php

namespace Faker\Test\Provider\ja_JP;

use Faker\Generator;
use Faker\Provider\ja_JP\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    public function testKanaNameReturnsAotaMinoru()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('アオタ ミノル', $faker->kanaName);
    }

    public function testFirstKanaNameReturnsHaruka()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('ハルカ', $faker->firstKanaName);
    }

    public function testLastKanaNameReturnsNakajima()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('ナカジマ', $faker->lastKanaName);
    }
}
