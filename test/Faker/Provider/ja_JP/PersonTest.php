<?php

namespace Faker\Test\Provider\jaJP;

use Faker\Generator;
use Faker\Provider\jaJP\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{

    public function testKanaNameReturnsAotaNaoko()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('アオタ ナオコ', $faker->kanaName());
    }

    public function testFirstKanaNameReturnsTomomi()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('トモミ', $faker->firstKanaName);
    }

    public function testLastKanaNameReturnsNagisa()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('ナギサ', $faker->lastKanaName);
    }

}
