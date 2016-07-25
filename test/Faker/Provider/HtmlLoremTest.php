<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\HtmlLorem;

class HtmlLoremTest extends \PHPUnit_Framework_TestCase
{

    public function testRandomP(){
        $node = HtmlLorem::randomP()->ownerDocument->saveHTML();
        $this->assertStringStartsWith("<p>", $node);
        $this->assertStringEndsWith("</p>", $node);
    }

    public function testRandomA(){
        $node = HtmlLorem::randomA()->compile();
        $this->assertStringStartsWith("<a href", $node);
        $this->assertStringEndsWith("</a>", $node);
    }

    public function testRandomSpan(){
        $node = HtmlLorem::randomSpan()->compile();
        $this->assertStringStartsWith("<span>", $node);
        $this->assertStringEndsWith("</span>", $node);
    }

    public function testRandomUL(){
        $node = HtmlLorem::randomUL()->compile();
        $this->assertStringStartsWith("<ul>", $node);
        $this->assertStringEndsWith("</ul>", $node);
    }

    public function testRandomH1(){
        $node = HtmlLorem::randomH1()->compile();
        $this->assertStringStartsWith("<h1>", $node);
        $this->assertStringEndsWith("</h1>", $node);
    }

    public function testRandomH2(){
        $node = HtmlLorem::randomH2()->compile();
        $this->assertStringStartsWith("<h2>", $node);
        $this->assertStringEndsWith("</h2>", $node);
    }

    public function testRandomH3(){
        $node = HtmlLorem::randomH3()->compile();
        $this->assertStringStartsWith("<h3>", $node);
        $this->assertStringEndsWith("</h3>", $node);
    }

    public function testRandomB(){
        $node = HtmlLorem::randomB()->compile();
        $this->assertStringStartsWith("<b>", $node);
        $this->assertStringEndsWith("</b>", $node);
    }

    public function testRandomI(){
        $node = HtmlLorem::randomI()->compile();
        $this->assertStringStartsWith("<i>", $node);
        $this->assertStringEndsWith("</i>", $node);
    }

    public function testRandomHtml(){
        $node = HtmlLorem::randomHtml();
        $this->assertStringStartsWith("<html>", $node);
        $this->assertStringEndsWith("</html>", $node);
    }

    public function testProvider(){
        $faker = new Generator();
        $faker->addProvider(new HtmlLorem($faker));
        $node = $faker->randomHtml();
        $this->assertStringStartsWith("<html>", $node);
        $this->assertStringEndsWith("</html>", $node);
    }

}