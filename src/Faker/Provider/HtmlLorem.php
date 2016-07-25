<?php

namespace Faker\Provider;

use Faker\Provider\HtmlLorem\HtmlNode;
use Faker\Provider\HtmlLorem\TextNode;

class HtmlLorem extends Base
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

    /** @var  \DOMDocument */
    private static $document;

    /**
     * @return string
     */
    public static function randomHtml($maxDepth = 8)
    {
        $html = self::document()->createElement("html");
        $head = self::document()->createElement("head");
        $body = self::document()->createElement("body");

        $html->appendChild($head);
        $html->appendChild($body);

        self::document()->appendChild($html);

        static::randomSubTree($body, $maxDepth);

        return self::document()->saveHTML();

        /*
        $html = new HtmlNode(HtmlNode::HTML);
        $head = new HtmlNode(HtmlNode::HEAD);
        $body = new HtmlNode(HtmlNode::BODY);
        $html->addNode($head);
        $html->addNode($body);
        $head->addNode(HtmlLorem::randomTitle());
        $body->addNode(HtmlLorem::loginForm());
        static::randomSubTree($body, $maxDepth);
        return $html->compile();
        */
    }

    private static function randomSubTree(\DOMElement $root, $depth)
    {

        if ($depth <= 0) {
            return $root;
        }

        $siblings = mt_rand(1, $depth * 5);
        for ($i = 0; $i < $siblings; $i++) {
            if ($depth == 1) {
                $root->appendChild(static::randomLeaf());
            } else {
                $sibling = $root->ownerDocument->createElement("div");
                static::addRandomAttribute($sibling);
                static::randomSubTree($sibling, mt_rand(0, $depth--));
                $root->appendChild($sibling);

            }

        };
        return $root;

        /*
        if ($depth <= 0) {
            return $root;
        }

        $siblings = mt_rand(1, $depth * 5);
        for ($i = 0; $i < $siblings; $i++) {
            if ($depth == 1) {
                $root->addNode(static::randomLeaf());
            } else {
                $sibling = new HtmlNode(HtmlNode::DIV);
                static::addRandomAttribute($sibling);
                static::randomSubTree($sibling, mt_rand(0, $depth--));
                $root->addNode($sibling);
            }

        };
        return $root;
        */
    }

    private static function randomLeaf()
    {
        $rand = mt_rand(1, 9);
        $rand = 1;
        switch($rand){
            case 1:
                return HtmlLorem::randomP();
                break;
            case 2:
                return HtmlLorem::randomA();
                break;
            case 3:
                return HtmlLorem::randomSpan();
                break;
            case 4:
                return HtmlLorem::randomUL();
                break;
            case 5:
                return HtmlLorem::randomH1();
                break;
            case 6:
                return HtmlLorem::randomH2();
                break;
            case 7:
                return HtmlLorem::randomH3();
                break;
            case 8:
                return HtmlLorem::randomB();
                break;
            case 9:
                return HtmlLorem::randomI();
                break;
            default:
                return HtmlLorem::randomText();
                break;
        }
    }

    private static function addRandomAttribute(\DOMElement $node)
    {
        $rand = mt_rand(1, 2);
        switch ($rand) {
            case 1:
                $node->setAttribute("class", Lorem::word());
                break;
            case 2:
                $node->setAttribute("id", (string)Base::randomNumber(5));
                break;
        }
    }

    public static function randomP($maxLength = 10)
    {

        $node = self::document()->createElement("p");
        $node->textContent = Lorem::sentence(mt_rand(1, $maxLength));
        return $node;
        /*
        return HtmlNode::newInstance("p")
            ->addNode(TextNode::newInstance(Lorem::sentence(mt_rand(1, $maxLength))));
        */
    }

    public static function randomText($maxLength = 10)
    {
        return TextNode::newInstance(Lorem::sentence(mt_rand(1, $maxLength)));
    }

    public static function randomA($maxLength = 10)
    {
        $text = TextNode::newInstance()
            ->setText(Lorem::sentence(mt_rand(1, $maxLength)));

        return HtmlNode::newInstance()
            ->setType(HtmlNode::A)
            ->addAttribute("href", Internet::safeEmailDomain())
            ->addNode($text);
    }

    public static function randomTitle($maxLength = 10)
    {
        $text = TextNode::newInstance()
            ->setText(Lorem::sentence(mt_rand(1, $maxLength)));
        return HtmlNode::newInstance()
            ->setType(HtmlNode::TITLE)
            ->addNode($text);
    }

    public static function randomH1($maxLength = 10)
    {
        $text = TextNode::newInstance()
            ->setText(Lorem::sentence(mt_rand(1, $maxLength)));
        return HtmlNode::newInstance(HtmlNode::H1)
            ->addNode($text);
    }

    public static function randomH2()
    {
        $text = TextNode::newInstance($maxLength = 10)
            ->setText(Lorem::sentence(mt_rand(1, $maxLength)));
        return HtmlNode::newInstance(HtmlNode::H2)
            ->addNode($text);
    }

    public static function randomH3()
    {
        $text = TextNode::newInstance($maxLength = 10)
            ->setText(Lorem::sentence(mt_rand(1, $maxLength)));
        return HtmlNode::newInstance(HtmlNode::H3)
            ->addNode($text);
    }

    public static function randomB($maxLength = 10)
    {
        $text = TextNode::newInstance()
            ->setText(Lorem::sentence(mt_rand(1, $maxLength)));
        return HtmlNode::newInstance(HtmlNode::B)
            ->addNode($text);
    }

    public static function randomI($maxLength = 10)
    {
        $text = TextNode::newInstance()
            ->setText(Lorem::sentence(mt_rand(1, $maxLength)));
        return HtmlNode::newInstance(HtmlNode::I)
            ->addNode($text);
    }

    public static function randomSpan($maxLength = 10)
    {
        $text = TextNode::newInstance()
            ->setText(Lorem::sentence(mt_rand(1, $maxLength)));
        return HtmlNode::newInstance(HtmlNode::SPAN)
            ->addNode($text);
    }

    public static function loginForm()
    {
        $textInput = HtmlNode::newInstance(HtmlNode::INPUT)
            ->addAttribute("type", "text")
            ->addAttribute("id", "username");
        $textLabel = HtmlNode::newInstance(HtmlNode::LABEL)
            ->addAttribute("for", "username")
            ->addNode(TextNode::newInstance(Lorem::word()));
        $passwordInput = HtmlNode::newInstance(HtmlNode::INPUT)
            ->addAttribute("type", "password")
            ->addAttribute("id", "password");
        $passwordLabel = HtmlNode::newInstance(HtmlNode::LABEL)
            ->addAttribute("for", "password")
            ->addNode(TextNode::newInstance(Lorem::word()));
        $submit = HtmlNode::newInstance(HtmlNode::INPUT)
            ->addAttribute("type", "submit")
            ->addAttribute("value", Lorem::word());
        return HtmlNode::newInstance(HtmlNode::FORM)
            ->addAttribute("action", Internet::safeEmailDomain())
            ->addAttribute("method", "POST")
            ->addNode($textLabel)
            ->addNode($textInput)
            ->addNode($passwordLabel)
            ->addNode($passwordInput)
            ->addNode($submit);
    }

    public static function randomTable($maxRows = 10, $maxCols = 6, $maxTitle = 4, $maxLength = 10)
    {
        $rows = mt_rand(1, $maxRows);
        $cols = mt_rand(1, $maxCols);

        $table = HtmlNode::newInstance(HtmlNode::TABLE);
        $thead = HtmlNode::newInstance(HtmlNode::THEAD);
        $tbody = HtmlNode::newInstance(HtmlNode::TBODY);

        $table
            ->addNode($thead)
            ->addNode($tbody);

        $tr = HtmlNode::newInstance("tr");
        $thead->addNode($tr);
        for ($i = 0; $i < $cols; $i++) {
            $th  = HtmlNode::newInstance("th");
            $th->addNode(TextNode::newInstance(Lorem::sentence(mt_rand(1, $maxTitle))));
            $tr->addNode($th);
        }
        for ($i = 0; $i < $rows; $i++) {
            $tr = HtmlNode::newInstance("tr");
            $tbody->addNode($tr);
            for ($j = 0; $j < $cols; $j++) {
                $th  = HtmlNode::newInstance("td");
                $th->addNode(TextNode::newInstance(Lorem::sentence(mt_rand(1, $maxLength))));
                $tr->addNode($th);
            }
        }
        return $table;
    }

    public static function randomUL($maxItems = 11, $maxLength = 4)
    {
        $num = mt_rand(1, $maxItems);
        $ul = HtmlNode::newInstance(HtmlNode::UL);
        for ($i = 0; $i < $num; $i++) {
            $li  = HtmlNode::newInstance(HtmlNode::LI);
            $li->addNode(TextNode::newInstance(Lorem::sentence(mt_rand(1, $maxLength))));
            $ul->addNode($li);
        }
        return $ul;
    }

    private static function document(){
        if(!self::$document){
            self::$document = new \DOMDocument();
        }
        return self::$document;
    }
}
