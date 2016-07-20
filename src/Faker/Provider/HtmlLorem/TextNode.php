<?php
/**
 * Created by IntelliJ IDEA.
 * User: Play
 * Date: 7/20/2016
 * Time: 8:39 PM
 */

namespace Faker\Provider\HtmlLorem;

class TextNode implements Node{

    private $text = "";

    public function __construct($text = null)
    {
        $this->text = $text;
    }

    function compile()
    {
        return $this->text;
    }

    /** @return TextNode */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /** @return TextNode */
    public static function newInstance($text = null){
        return new TextNode($text);
    }

}