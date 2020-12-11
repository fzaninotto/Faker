<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\HtmlLorem;
use PHPUnit\Framework\TestCase;

final class HtmlLoremTest extends TestCase
{

    public function testProvider()
    {
        $faker = new Generator();
        $faker->addProvider(new HtmlLorem($faker));

        $node = $faker->randomHtml(6, 10);

        $this->assertStringStartsWith("<html>", $node);
        $this->assertStringEndsWith("</html>\n", $node);
    }

    public function testRandomHtmlReturnsValidHTMLString()
    {
        $faker = new Generator();
        $faker->addProvider(new HtmlLorem($faker));

        $dom = new \DOMDocument();
        $node = $faker->randomHtml(6, 10);

        $this->assertTrue($dom->loadHTML($node));
    }

    public function testRandomHtmlFragmentReturnsValidHtmlString()
    {
        $faker = new Generator;
        $faker->addProvider(new HtmlLorem($faker));

        $dom = new \DOMDocument;
        $html = trim($faker->randomHtmlFragment(9, 5));

        $this->assertTrue($dom->loadHTML($html));
    }
}
