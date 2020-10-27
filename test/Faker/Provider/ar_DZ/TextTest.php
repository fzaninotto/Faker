<?php

namespace Faker\Test\Provider\ar_DZ;

use Faker\Generator;
use Faker\Provider\ar_DZ\Text;
use PHPUnit\Framework\TestCase;

final class TextTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Text($faker));
        $this->faker = $faker;
    }

    public function testIfRealTextIsGeneratedCorrectly()
    {
        $realText = $this->faker->realText;
        $this->assertNotNull($realText);
        $this->assertInternalType('string', $realText);
        $this->assertRegExp('/\p{Arabic}+/u', $realText);
    }

}
