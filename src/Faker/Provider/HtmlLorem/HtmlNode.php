<?php
/**
 * Created by IntelliJ IDEA.
 * User: Play
 * Date: 7/20/2016
 * Time: 8:39 PM
 */

namespace Faker\Provider\HtmlLorem;


class HtmlNode implements Node
{

    const HTML = "html";
    const HEAD = "head";
    const BODY = "body";
    const DIV = "div";
    const A = "a";
    const SPAN = "span";
    const TABLE = "table";
    const THEAD = "thead";
    const TBODY = "tbody";
    const UL = "ul";
    const LI = "li";
    const H1 = "h1";
    const H2 = "h2";
    const H3 = "h3";
    const B= "b";
    const I = "i";
    const TITLE = "title";
    const FORM = "form";
    const INPUT = "input";
    const LABEL = "label";

    private $attributes = array();
    /** @var Node[]  */
    private $nodes = array();
    private $type;

    /**
     * Document constructor.
     * @param $type
     */
    public function __construct($type = null)
    {
        $this->type = $type;
    }

    /**
     * @param null $type
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /** @return HtmlNode */
    public function addAttribute($key, $value){
        $this->attributes[$key] = $value;
        return $this;
    }

    /** @return HtmlNode */
    public function addNode(Node $node)
    {
        $this->nodes[] = $node;
        return $this;
    }

    public function compile()
    {
        if(!$this->type){
            return "";
        }
        if(count($this->nodes) == 0){
            return "<" . $this->type . $this->compileAttributes() . "/>";
        }
        return "<" . $this->type . $this->compileAttributes() . ">" . $this->compileNodes() .  "</" . $this->type . ">";
    }

    private function compileNodes()
    {
        $nodes = "";
        foreach($this->nodes as $node){
            $nodes = $nodes . $node->compile();
        }
        return $nodes;
    }

    private function compileAttributes()
    {
        $attributes = "";
        foreach($this->attributes as $key => $value){
            $attributes = $attributes . " " . $key . "=\"" . $value . "\"";
        }
        return $attributes;
    }

    /** @return HtmlNode */
    public static function newInstance($type = null){
        $node = new HtmlNode($type);
        return $node;
    }

}