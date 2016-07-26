<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\HtmlLorem;

class HtmlLoremTest extends \PHPUnit_Framework_TestCase
{

    public function testProvider(){
        $faker = new Generator();
        $faker->addProvider(new HtmlLorem($faker));
        $node = $faker->randomHtml();
        $this->assertStringStartsWith("<html>", $node);
        $this->assertStringEndsWith("</html>", $node);
    }

}