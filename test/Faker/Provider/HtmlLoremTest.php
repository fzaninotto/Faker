<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\HtmlLorem;

class HtmlLoremTest extends \PHPUnit_Framework_TestCase
{

    public function testProvider()
    {
        $faker = new Generator();
        $faker->addProvider(new HtmlLorem($faker));
        $node = $faker->randomHtml(6, 10);
        $this->assertStringStartsWith("<html>", $node);
        $this->assertStringEndsWith("</html>\n", $node);
    }

    public function testRandomHtmlReturnsValidHTMLString(){
        $faker = new Generator();
        $faker->addProvider(new HtmlLorem($faker));
        $node = $faker->randomHtml(5, 5);
        $dom = new \DOMDocument();
        $error = $dom->loadHTML($node);
        $this->assertTrue($error);
    }

    public function testRandomBodyReturnsValidHTMLString(){
        $faker = new Generator();
        $faker->addProvider(new HtmlLorem($faker));
        $node = $faker->randomHTMLBody(5, 5);
        $dom = new \DOMDocument();
        $isValidHtml = $dom->loadHTML($node);
        $this->assertTrue($isValidHtml);
    }

    public function testRandomBodyFragment(){
        $faker = new Generator();
        $faker->addProvider(new HtmlLorem($faker));
        $fragment = $faker->randomBodyFragments(5, 5);
        $this->assertStringStartsWith("<", $fragment);
        $this->assertStringEndsWith(">", $fragment);
    }

}
