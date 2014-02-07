<?php

namespace Faker\Test\Provider;

use Faker\Provider\HtmlLorem;

class HtmlLoremTest extends \PHPUnit_Framework_TestCase
{

    public function test_boldAndItalic()
    {
        $text1 = HtmlLorem::lorem(5, 1);
        $text2 = HtmlLorem::lorem(5, 2);
        $this->assertEquals(1, $this->countElements($text1, array('b', 'i')));
        $this->assertEquals(2, $this->countElements($text2, array('b', 'i')));
    }

    public function test_links()
    {
        $text1 = HtmlLorem::lorem(5, 0, 1);
        $text2 = HtmlLorem::lorem(5, 0, 2);
        $this->assertEquals(1, $this->countElements($text1, array('a')));
        $this->assertEquals(2, $this->countElements($text2, array('a')));
    }

    public function test_unorderedlist()
    {
        $text1 = HtmlLorem::lorem(5, 0, 0, 1);
        $text2 = HtmlLorem::lorem(5, 0, 0, 2);
        $this->assertEquals(1, $this->countElements($text1, array('ul')));
        $this->assertEquals(2, $this->countElements($text2, array('ul')));
    }

    public function test_orderedlist()
    {
        $text1 = HtmlLorem::lorem(5, 0, 0, 0, 1);
        $text2 = HtmlLorem::lorem(5, 0, 0, 0, 2);
        $this->assertEquals(1, $this->countElements($text1, array('ol')));
        $this->assertEquals(2, $this->countElements($text2, array('ol')));
    }

    public function test_descriptionlist()
    {
        $text1 = HtmlLorem::lorem(5, 0, 0, 0, 0, 1);
        $text2 = HtmlLorem::lorem(5, 0, 0, 0, 0, 2);
        $this->assertEquals(1, $this->countElements($text1, array('dl')));
        $this->assertEquals(2, $this->countElements($text2, array('dl')));
    }

    public function test_blockquote()
    {
        $text1 = HtmlLorem::lorem(5, 0, 0, 0, 0, 0, 1);
        $text2 = HtmlLorem::lorem(5, 0, 0, 0, 0, 0, 2);
        $this->assertEquals(1, $this->countElements($text1, array('blockquote')));
        $this->assertEquals(2, $this->countElements($text2, array('blockquote')));
    }

    public function test_code()
    {
        $text1 = HtmlLorem::lorem(5, 0, 0, 0, 0, 0, 0, 1);
        $text2 = HtmlLorem::lorem(5, 0, 0, 0, 0, 0, 0, 2);
        $this->assertEquals(1, $this->countElements($text1, array('code', 'pre')));
        $this->assertEquals(2, $this->countElements($text2, array('code', 'pre')));
    }

    public function test_headers()
    {
        $text1 = HtmlLorem::lorem(5, 0, 0, 0, 0, 0, 0, 0, 1);
        $text2 = HtmlLorem::lorem(5, 0, 0, 0, 0, 0, 0, 0, 2);
        $this->assertEquals(1, $this->countElements($text1, array('h1', 'h2', 'h3', 'h4', 'h5', 'h6')));
        $this->assertEquals(2, $this->countElements($text2, array('h1', 'h2', 'h3', 'h4', 'h5', 'h6')));
    }

    private function countElements($text, $tags)
    {
        $preg = '/(<(' . implode('|', $tags) . ')(.*?)>)/';
        return preg_match_all($preg, $text, $matches);
    }

} 