<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\HtmlLorem;

/**
 * Note that the tests in here include for loops to increase the chances of
 * catching edge cases caused by the inherently random nature of the data.
 */
class HtmlLoremTest extends \PHPUnit_Framework_TestCase
{
    public function testRandomHTMLReturnsValidHTMLString()
    {
        for ($x = 1; $x <= 100; $x++) {
            $faker = $this->setupFakerWithProvider();

            $html = $faker->randomHTML(5, 5);

            $this->assertHTMLIsValid($html);
            $this->assertStringStartsWith("<html>", $html);
            $this->assertStringEndsWith("</html>\n", $html);
            $this->assertHTMLContainsHumanReadableContent($html);
        }
    }

    public function testRandomBodyReturnsValidHTMLBodyString()
    {
        for ($x = 1; $x <= 100; $x++) {
            $faker = $this->setupFakerWithProvider();

            $node = $faker->randomHTMLBody(5, 5);

            $this->assertHTMLIsValid($node);
            $this->assertStringStartsWith("<body>", $node);
            $this->assertStringEndsWith("</body>\n", $node);
            $this->assertHTMLContainsHumanReadableContent($node);
        }
    }

    public function testRandomHTMLFragmentsReturnsValidHTMLFragmentString()
    {
        for ($x = 1; $x <= 100; $x++) {
            $faker = $this->setupFakerWithProvider();

            $html = $faker->randomHTMLFragments(5, 5);

            $this->assertStringStartsWith("<", $html);
            $this->assertStringEndsWith(">", $html);
            $this->assertHTMLContainsHumanReadableContent($html);
        }
    }

    /**
     * @param string $html
     * @return void
     */
    private function assertHTMLIsValid($html)
    {
        $dom = new \DOMDocument();
        $isValidHtml = $dom->loadHTML($html);
        $this->assertTrue($isValidHtml);
    }

    /**
     * @param string $html
     */
    private function assertHTMLContainsHumanReadableContent($html)
    {
        $this->assertNotEmpty(strip_tags($html));
    }

    /**
     * @return Generator
     */
    private function setupFakerWithProvider()
    {
        $faker = new Generator();
        $faker->addProvider(new HtmlLorem($faker));
        return $faker;
    }
}
