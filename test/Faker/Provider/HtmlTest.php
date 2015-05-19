<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Html;
use Faker\Provider\Lorem;

class HtmlTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Lorem($faker));
        $faker->addProvider(new Html($faker));
        $this->faker = $faker;
    }

    public function test_emptySelfClosingHtmlTag()
    {
        $tagName = "p";
        $tag = $this->faker->htmlTag($tagName, '', 0); // "<p/>"
        $this->assertEquals(sprintf("<%s/>", $tagName), $tag);
    }

    public function test_simpleContentHtmlTagWithoutAttributes()
    {
        $tagName = "p";
        $paragraph = $this->faker->paragraph();
        $tag = $this->faker->htmlTag($tagName, $paragraph, 0);
        $this->assertEquals(sprintf("<%s>%s</%s>", $tagName, $paragraph, $tagName), $tag);
    }

    public function test_simpleContentHtmlTagWithAttributes()
    {
        $tagName = "p";
        $content = $this->faker->paragraph();
        $tag = $this->faker->htmlTag($tagName, $content, 1);
        $dom = new \DOMDocument();
        $this->assertTrue($dom->loadHTML($tag));
        $elements = $dom->getElementsByTagName($tagName);
        $this->assertEquals($tagName, $elements->item(0)->nodeName);
        $this->assertEquals($content, $elements->item(0)->textContent);
        $this->assertTrue($elements->item(0)->hasAttributes());
    }

    public function test_htmlLoremSmallLengths()
    {
        $html = Html::html(Html::SMALLEST_HTML_LENGTH+5);
        //TODO This below do not have any sense to me
        $this->assertTrue(strlen(strip_tags($html)) < strlen($html));
    }

    public function test_htmlLoremMediumLengths()
    {
        $html = Html::html(Html::SMALLEST_HTML_LENGTH+30);
        //TODO This below do not have any sense to me
        $this->assertTrue(strlen(strip_tags($html)) < strlen($html));
    }

    public function test_htmlLoremLongLengths()
    {
        $html = Html::html(Html::SMALLEST_HTML_LENGTH+25);
        //TODO This below do not have any sense to me
        $this->assertTrue(strlen(strip_tags($html)) < strlen($html));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function test_htmlTooSmall()
    {
        Html::html(Html::SMALLEST_HTML_LENGTH + Lorem::TOO_SHORT_TEXT_ARGUMENT -1);
    }

}
