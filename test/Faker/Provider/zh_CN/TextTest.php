<?php

namespace Faker\Test\Provider\zh_CN;

use Faker\Generator;
use Faker\Provider\zh_CN\Text;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    /**
    * @var Generator
    */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Text($faker));
        $this->faker = $faker;
    }

    public function testText()
    {
        $text = $this->faker->realText();
        $this->assertNotNull($text);
    }
}
